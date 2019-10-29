<?php

namespace Cocur\Chain;

/**
 * ExtensibleChain
 * 
 * Use this class as a potential extension point for user-defined traits.
 * You can provide your own implementation by using Composer
 * `autoload.classmap` and `autoload.exclude-from-classmap`:
 * ```
 * {
 *     "autoload": {
 *         "classmap": ["src/chain/ExtensibleChain.php"],
 *         "exclude-from-classmap": ["vendor/cocur/chain/src/ExtensibleChain.php"]
 *     }
 * }
 * ```
 *
 * @see https://getcomposer.org/doc/04-schema.md#classmap
 * @see https://getcomposer.org/doc/04-schema.md#exclude-files-from-classmaps
 * @author    Nicolas Reynis
 */
class ExtensibleChain extends AbstractChain
{
}
