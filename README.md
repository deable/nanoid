deable / nanoid
===============

Tiny and secure unique string ID generator for PHP.
- **Safe.** It uses cryptographically strong random APIs and guarantees a proper distribution of symbols.
- **Small.** Only one class to handle all the logic. No dependencies.
- **Compact.** It uses more symbols than UUID (A-Za-z0-9) and has the same number of unique options in just 22 symbols instead of 36.

This tool was created based on JS library [nanoid](https://github.com/ai/nanoid) as a simplified version of other ported PHP libraries
[hidehalo/nanoid-php](https://github.com/hidehalo/nanoid-php) and [better/nanoid](https://github.com/Microtribute/better-nanoid).

To optimize the length of your unique IDs, use [this tool](https://zelark.github.io/nano-id-cc/) to check collision probabilities.
Don't forget that this library uses as default only characters **A-Za-z0-9**.

Requirements
------------

This library was developed for PHP 7.3 or newer.

Installation
------------

The best way to install this library is using [Composer](https://getcomposer.org/):

```sh
$ composer require deable/nanoid
```

Usage
-----

```php
$id = Deable\Nanoid::generate(22);
```

Contributing
------------
This is an open source, community-driven project. If you would like to contribute,
please follow the code format as used in current sources and submit a pull request.
