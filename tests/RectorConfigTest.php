<?php

declare(strict_types=1);

namespace WyriHaximus\Tests\RectorPHP;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Rector\Configuration\RectorConfigBuilder;
use ReflectionMethod;
use WyriHaximus\RectorPHP\RectorConfig;

use function array_values;
use function iterator_to_array;
use function mkdir;
use function rmdir;
use function sys_get_temp_dir;
use function uniqid;

final class RectorConfigTest extends TestCase
{
    #[Test]
    public function configureReturnsRectorConfigBuilder(): void
    {
        self::assertInstanceOf(
            RectorConfigBuilder::class,
            RectorConfig::configure(__DIR__ . '/../..'),
        );
    }

    #[Test]
    public function configureSkipsMissingPaths(): void
    {
        $packageRoot = sys_get_temp_dir() . '/rectorphp-config-' . uniqid('', true);
        mkdir($packageRoot);
        mkdir($packageRoot . '/src');

        try {
            self::assertInstanceOf(
                RectorConfigBuilder::class,
                RectorConfig::configure($packageRoot),
            );
        } finally {
            rmdir($packageRoot . '/src');
            rmdir($packageRoot);
        }
    }

    #[Test]
    public function getPathsYieldsOnlyExistingDirectories(): void
    {
        $packageRoot = sys_get_temp_dir() . '/rectorphp-config-' . uniqid('', true);
        mkdir($packageRoot);
        mkdir($packageRoot . '/etc');
        mkdir($packageRoot . '/src');

        try {
            self::assertSame(
                [
                    $packageRoot . '/etc',
                    $packageRoot . '/src',
                ],
                $this->getPaths($packageRoot),
            );
        } finally {
            rmdir($packageRoot . '/src');
            rmdir($packageRoot . '/etc');
            rmdir($packageRoot);
        }
    }

    /** @return list<string> */
    private function getPaths(string $packageRoot): array
    {
        $method = new ReflectionMethod(RectorConfig::class, 'getPaths');

        /** @var iterable<string> $paths */
        $paths = $method->invoke(null, $packageRoot);

        return array_values(iterator_to_array($paths));
    }
}
