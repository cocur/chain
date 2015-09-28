Chain
=====

> Chain provides you with a consistent and chainable way to work with arrays in PHP.

Made by [Florian Eckerstorfer](https://florian.ec) in Vienna, Europe.


Motivation
----------

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
echo (new Chain([1, 2, 3, 4, 5]))
    ->diff([0, 1, 9])
    ->intersect((new Chain([2, 3, 4]))->filter(function ($v) { return !($v & 1); }))
    ->sum();
```

*Hint: It takes the diff of two arrays, intersects it with a filtered array and sums it up.*


Usage
-----

Chain allows you to create, manipulate and access arrays.

### Array Creation

You can create a Chain by passing an array to the constructor.

```php
$chain = new Chain([1, 2, 3]);
```

In addition a Chain can also be created by the static `fill()` method, which is a wrapper for the `array_fill()`
function.

```php
$chain = Chain::fill(0, 10, 'foo');
```

### Array Manipulation

Chains manipulation methods manipulate the underlying array and return the object, that is, they can be chained. Most
of the methods are simple wrappers around the corresponding `array_` function.

In the following example `->map()` is used to multply each element by `3` and then filter the array to only contain
odd elements.

```php
$chain = (new Chain([1, 2, 3]))
    ->map(function ($v) { return $v*3; })
    ->filter(function ($v) { return $v & 1; });
$chain->array; // -> [3, 9]
```

When a method accepts an array (`->diff()` or `->intersect()`) then you can pass in another instance of `Chain`
instead of the array.

#### List of Array Manipulation Methods

- `->diff(array|Chain)`
- `->filter(callable)`
- `->intersect(array|chain)`
- `->intersectAssoc(array|chain)`
- `->intersectKey(array|chain)`
- `->map(callable)`
- `->merge(array|chain)`
- `->push(mixed)`
- `->unshift(mixed)`

### Array Access

Most importantly you can access the underlying array using the public `array` property.

```php
$chain = new Chain([1, 2, 3]);
$chain->array; // -> [1, 2, 3]
```

Chain implements the [Traversable](http://php.net/manual/en/class.traversable.php) Interface.
```php
$chain = new Chain([1, 2, 3]);
foreach ($chain as $key => $value) {
  // ...
}
```


Additionally `Chain` contains a number of methods to access properties of the array. In contrast to the manipulation
methods these methods return a value instead of a reference to the `Chain` object. That is, array access methods are
not chainable.

```php
$chain = new Chain([1, 2, 3]);
$chain->count(); // -> 3
$chain->sum(); // -> 6

$chain->reduce(function ($current, $value) {
    return $current * $value;
}, 1); // -> 6
```


#### List of Array Manipulation Methods

- `->count()`
- `->pop()`
- `->reduce(callable[, int])`
- `->shift()`
- `->sum()`
