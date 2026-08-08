# RectorPHP Config

RectorPHP configuration tooling and additional rules.

![Continuous Integration](https://github.com/WyriHaximus/rectorphp-config/workflows/Continuous%20Integration/badge.svg)
[![Latest Stable Version](https://poser.pugx.org/wyrihaximus/rector-config/v/stable.png)](https://packagist.org/packages/wyrihaximus/rector-config)
[![Total Downloads](https://poser.pugx.org/wyrihaximus/rector-config/downloads.png)](https://packagist.org/packages/wyrihaximus/rector-config)
[![License](https://poser.pugx.org/wyrihaximus/rector-config/license.png)](https://packagist.org/packages/wyrihaximus/rector-config)

# Installation

To install via [Composer](http://getcomposer.org/), use the command below, it will automatically detect the latest version and bind it with `^`.

```
composer require wyrihaximus/rector-config --dev
```

# Usage

A `RectorConfig` is provided with defaults including where `etc`, `examples`, `src`, and `tests` are. It also converts all
doc tags to attributes that it's aware of.

```php
<?php

declare(strict_types=1);

use WyriHaximus\RectorPHP\RectorConfig;

return RectorConfig::configure(dirname(__DIR__, 2));
```

# License

The MIT License (MIT)

Copyright (c) 2026 Cees-Jan Kiewiet

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
