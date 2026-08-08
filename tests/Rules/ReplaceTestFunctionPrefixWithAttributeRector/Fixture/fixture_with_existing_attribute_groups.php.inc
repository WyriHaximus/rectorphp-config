<?php

namespace WyriHaximus\Tests\RectorPHP\Rules\ReplaceTestFunctionPrefixWithAttributeRector\Fixture;

class SomeTest extends \PHPUnit\Framework\TestCase
{
    #[\PHPUnit\Framework\Attributes\DataProvider('provideData')]
    public function testWithExistingAttribute()
    {
        $this->assertSame(2, 1+1);
    }

    public static function provideData(): array
    {
        return [];
    }
}

?>
-----
<?php

namespace WyriHaximus\Tests\RectorPHP\Rules\ReplaceTestFunctionPrefixWithAttributeRector\Fixture;

class SomeTest extends \PHPUnit\Framework\TestCase
{
    #[\PHPUnit\Framework\Attributes\DataProvider('provideData')]
    #[\PHPUnit\Framework\Attributes\Test]
    public function withExistingAttribute()
    {
        $this->assertSame(2, 1+1);
    }

    public static function provideData(): array
    {
        return [];
    }
}

?>
