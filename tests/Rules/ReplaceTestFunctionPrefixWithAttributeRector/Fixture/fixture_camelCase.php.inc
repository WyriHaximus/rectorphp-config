<?php

namespace WyriHaximus\Tests\RectorPHP\Rules\ReplaceTestFunctionPrefixWithAttributeRector\Fixture;

class SomeTest extends \PHPUnit\Framework\TestCase
{
    public function testOnePlusOneShouldBeTwo()
    {
        $this->assertSame(2, 1+1);
    }
}

?>
-----
<?php

namespace WyriHaximus\Tests\RectorPHP\Rules\ReplaceTestFunctionPrefixWithAttributeRector\Fixture;

class SomeTest extends \PHPUnit\Framework\TestCase
{
    #[\PHPUnit\Framework\Attributes\Test]
    public function onePlusOneShouldBeTwo()
    {
        $this->assertSame(2, 1+1);
    }
}

?>
