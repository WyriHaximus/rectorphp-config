<?php

declare(strict_types=1);

namespace WyriHaximus\Tests\RectorPHP\Rules;

use PhpParser\Node\Stmt\ClassMethod;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Rector\Config\RectorConfig;
use Rector\DependencyInjection\LazyContainerFactory;
use WyriHaximus\RectorPHP\Rules\ReplaceTestFunctionPrefixWithAttributeRector;

final class ReplaceTestFunctionPrefixWithAttributeRectorMetadataTest extends TestCase
{
    #[Test]
    public function getRuleDefinitionDescribesTheRule(): void
    {
        $rector = self::getContainer()->make(ReplaceTestFunctionPrefixWithAttributeRector::class);

        self::assertSame(
            'Replace @test with prefixed function',
            $rector->getRuleDefinition()->getDescription(),
        );
    }

    #[Test]
    public function getNodeTypesTargetsClassMethods(): void
    {
        $rector = self::getContainer()->make(ReplaceTestFunctionPrefixWithAttributeRector::class);

        self::assertSame([ClassMethod::class], $rector->getNodeTypes());
    }

    private static function getContainer(): RectorConfig
    {
        /** @var RectorConfig|null $rectorConfig */
        static $rectorConfig = null;

        if ($rectorConfig === null) {
            $lazyContainerFactory = new LazyContainerFactory();
            $rectorConfig         = $lazyContainerFactory->create();
            $rectorConfig->boot();
        }

        return $rectorConfig;
    }
}
