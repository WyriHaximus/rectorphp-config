<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use WyriHaximus\RectorPHP\Rules\ReplaceTestFunctionPrefixWithAttributeRector;

return RectorConfig::configure()
    ->withRules([
        ReplaceTestFunctionPrefixWithAttributeRector::class,
    ]);
