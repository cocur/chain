# Chain

> Chain provides you with a consistent and chainable way to work with arrays in PHP.

[![Build Status](https://img.shields.io/travis/cocur/chain/master.svg?style=flat)](https://travis-ci.org/cocur/chain)
[![Windows Build status](https://ci.appveyor.com/api/projects/status/vyfgsqsrx98w8d8n?svg=true)](https://ci.appveyor.com/project/florianeckerstorfer/chain)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/cocur/chain.svg?style=flat)](https://scrutinizer-ci.com/g/cocur/chain/?branch=master)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/cocur/chain.svg?style=flat)](https://scrutinizer-ci.com/g/cocur/chain/?branch=master)

Made by [Florian Eckerstorfer](https://florian.ec) in Vienna, Europe.

## Motivation

Let us be honest. Working with arrays in PHP is a mess. First of all, you have to prefix most (but not all) functions
with `array_`, the parameter ordering is not consistent. For example, `array_map()` expects the callback as first
parameter and the array as the second, but `array_filter()` expects the array as first and the callback as second. You
also have to wrap the function calls around the array, the resulting code is not nice to look at, not readable and
hard to understand.

```php
$arr = array_filter(
    array_map(
        function ($v) { return rand(0, $v); },
        array_fill(0, 10, 20)
    ),
    function ($v) { return $v & 1; }
);
```

Chain wraps the array in an object and gives you a chainable interface.

```php
$chain = Chain::fill(0, 10, 20)
    ->map(function ($v) { return rand(0, $v); })
    ->filter(function ($v) { return $v & 1; });
```

Take a look at the following code. How long do you need to understand it?

```php
echo array_sum(array_intersect(
    array_diff([1, 2, 3, 4, 5], [0, 1, 9]),
    array_filter([2, 3, 4], function ($v) { return !($v & 1); })
));
```

What about this?

```php
echo Chain::create([1, 2, 3, 4, 5])
    ->diff([0, 1, 9])
    ->intersect(Chain::create([2, 3, 4])->filter(function ($v) { return !($v & 1); }))
    ->sum();
```

_Hint: It takes the diff of two arrays, intersects it with a filtered array and sums it up._

## Installation

You can install Chain using [Composer](http://getcomposer.org):

```shell
$ composer require cocur/chain
```

## Usage

Chain allows you to create, manipulate and access arrays.

### Array Creation

You can create a Chain by passing an array to the constructor.

```php
$chain = new Chain([1, 2, 3]);
```

Or with a convenient static method:

```php
$chain = Chain::create([1, 2, 3]);
```

In addition a Chain can also be created by the static `fill()` method, which is a wrapper for the `array_fill()`
function.

```php
$chain = Chain::fill(0, 10, 'foo');
```

There is also a method, `::createFromString()`, that creates the Chain from a string. In addition to the string you
need to provide a delimiter, which is used to split the string. If the option `regexp` is passed in the delimiter must
be a regular expression.

```php
Chain::createFromString(',', '1,2,3')->array;                               // -> [1, 2, 3]
Chain::createFromString('/,|.|;/', '1,2.3;4,5', ['regexp' => true])->array; // -> [1, 2, 3, 4, 5]
```

### Array Manipulation

Chains manipulation methods manipulate the underlying array and return the object, that is, they can be chained. Most
of the methods are simple wrappers around the corresponding `array_` function.

In the following example `->map()` is used to multiply each element by `3` and then filter the array to only contain
odd elements.

```php
$chain = (new Chain([1, 2, 3]))
    ->map(function ($v) { return $v*3; })
    ->filter(function ($v) { return $v & 1; });
$chain->array; // -> [3, 9]
```

When a method accepts an array (`->diff()` or `->intersect()`) you can also pass in another instance of `Chain`
instead of the array.

#### List of Array Manipulation Methods

All of these methods manipulate the array, but not all of them return an instance of `Cocur\Chain\Chain`. For example,
`->shift()` removes the first element from the array and returns it.

- `->changeKeyCase()`
- `->combine(array|Chain, array|Chain)`
- `->count()`
- `->diff(array|Chain)`
- `->filter(callable)`
- `->find(callable)`
- `->flatMap(callable)`
- `->flip()`
- `->intersect(array|Chain)`
- `->intersectAssoc(array|Chain)`
- `->intersectKey(array|Chain)`
- `->keys()`
- `->map(callable)`
- `->merge(array|Chain)`
- `->pad(int, mixed)`
- `->pop()`
- `->product()`
- `->push(mixed)`
- `->reduce(callable[, int])`
- `->reverse([bool])`
- `->search(mixed[, bool])`
- `->shift()`
- `->shuffle()`
- `->sort(sortFlags)`
- `->sortKeys(sortFlags)`
- `->splice(offset[, length[, replacement]])`
- `->sum()`
- `->unique()`
- `->unshift(mixed)`
- `->values()`

### Array Access

Most importantly you can access the underlying array using the public `array` property.

```php
$chain = new Chain([1, 2, 3]);
$chain->array; // -> [1, 2, 3]
```

Chain implements the [Traversable](http://php.net/manual/en/class.traversable.php) interface.

```php
$chain = new Chain([1, 2, 3]);
foreach ($chain as $key => $value) {
  // ...
}
```

It also implements the [ArrayAccess](http://php.net/manual/en/class.arrayaccess.php) interface allowing to access
elements just like in any normal array.

```php
$chain = new Chain();
$chain['foo'] = 'bar';
if (isset($chain['foo'])) {
    echo $chain['foo'];
    unset($chain['foo']);
}
```

Additionally `Chain` contains a number of methods to access properties of the array. In contrast to the manipulation
methods these methods return a value instead of a reference to the `Chain` object. That is, array access methods are
not chainable.

```php
$chain = new Chain([1, 2, 3]);
$chain->count(); // -> 3
$chain->sum();   // -> 6
$chain->first(); // -> 1
$chain->last();  // -> 3

$chain->reduce(function ($current, $value) {
    return $current * $value;
}, 1); // -> 6
```

### List of Array Access Methods

- `->count()`
- `->countValues()`
- `->every(callable)`
- `->first()`
- `->includes(mixed[, array])`
- `->join([$glue])`
- `->last()`
- `->reduce()`
- `->some()`
- `->sum()`

## Author

Chain has been developed by [Florian Eckerstorfer](https://florian.ec) ([Twitter](https://twitter.com/Florian_)) in
Vienna, Europe.

> Chain is a project of [Cocur](http://cocur.co). You can contact us on Twitter:
> [**@cocurco**](https://twitter.com/cocurco)

## Support

If you need support you can ask on [Twitter](https://twitter.com/cocurco) (well, only if your question is short) or you
can join our chat on Gitter.

[![Gitter](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/cocur/chain)

In case you want to support the development of Chain you can [send me an Euro or two](https://paypal.me/florianec/2).

## Change Log

### Version 0.9.0 (19 July 2020)

- [#42](https://github.com/cocur/chain/pull/42) Refactor to support strong typing (by [nreynis](https://github.com/nreynis))
- [#45](https://github.com/cocur/chain/pull/45) Use self return type (by [nreynis](https://github.com/nreynis))
- [#46](https://github.com/cocur/chain/pull/46) Bugfixes for splice and replace (by [nreynis](https://github.com/nreynis))
- [#47](https://github.com/cocur/chain/pull/47) Handle invalid patterns in createFromString (by [nreynis](https://github.com/nreynis))
- [#49](https://github.com/cocur/chain/pull/49) Move static factory fill method (by [nreynis](https://github.com/nreynis))
- [#50](https://github.com/cocur/chain/pull/50) Add includes (in_array) (by [nreynis](https://github.com/nreynis))
- [#51](https://github.com/cocur/chain/pull/51) Add every (by [nreynis](https://github.com/nreynis))
- [#52](https://github.com/cocur/chain/pull/52) Add some (by [nreynis](https://github.com/nreynis))

### Version 0.8.0 (12 September 2019)

- [#40](https://github.com/cocur/chain/pull/40) Update tooling and dependencies, set minimum PHP version to 7.2
- [#37](https://github.com/cocur/chain/pull/37) Add missing traits `\Cocur\Chain\Chain` (by [nreynis](https://github.com/nreynis))
- [#41](https://github.com/cocur/chain/pull/41) Add `➞ flatMap()` (by [nreynis](https://github.com/nreynis))

### Version 0.7.0 (11 November 2018)

- [#28](https://github.com/cocur/chain/pull/28) Fix `->slice()` (by [Arpple](https://github.com/Arpple))
- [#29](https://github.com/cocur/chain/pull/29) Pass key to callback in `->filter()` (by [silvadanilo](https://github.com/silvadanilo))
- [#30](https://github.com/cocur/chain/pull/30) Pass key to callback in `->map()` (by [silvadanilo](https://github.com/silvadanilo))
- [#31](https://github.com/cocur/chain/pull/31) Add `->values()` link (by [florianeckerstorfer](https://github.com/florianeckerstorfer))

### Version 0.6.0 (5 April 2018)

- [#23](https://github.com/cocur/chain/pull/23) Add JsonSerializable to Chain (by [florianeckerstorfer](https://github.com/florianeckerstorfer))

### Version 0.5.0 (4 December 2017)

- [#19](https://github.com/cocur/chain/pull/19) Add `Join` link (by [florianeckerstorfer](https://github.com/florianeckerstorfer))

### Version 0.4.1 (4 December 2017)

- Add `Find` link to `Cocur\Chain\Chain`

### Version 0.4.0 (22 September 2017)

- [#17](https://github.com/cocur/chain/pull/17) Add `Find` link (by [gries](https://github.com/gries))

### Version 0.3.0 (7 September 2017)

- [#12](https://github.com/cocur/chain/pull/13) Restore constructor (by [sanmai](https://github.com/sanmai))
- Move first() and last() methods into traits
- Add additional links (`CountValues`, `KeyExists`, `Splice`)
- Update `Merge` link

### Version 0.2.0 (6 November 2015)

- [#11](https://github.com/cocur/chain/pull/11) Add `Cocur\Chain\Chain::createFromString()` to create a chain from a
  string
- [#10](https://github.com/cocur/chain/pull/10) Add methods to `Cocur\Chain\AbstractChain` to retrieve first and last
  element of chain.
- [#9](https://github.com/cocur/chain/pull/9) `Cocur\Chain\Chain` is now countable

### Version 0.1.0 (6 November 2015)

- _Initial release_

## License

The MIT license applies to Chain. For the full copyright and license information, please view the
[LICENSE](https://github.com/cocur/vale/blob/master/LICENSE) file distributed with this source code.
