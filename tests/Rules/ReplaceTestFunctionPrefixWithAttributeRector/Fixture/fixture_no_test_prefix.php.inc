<?php

namespace WyriHaximus\Tests\RectorPHP\Rules\ReplaceTestFunctionPrefixWithAttributeRector\Fixture;

class SomeTest extends \PHPUnit\Framework\TestCase
{
    public function notATestMethod()
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
    public function notATestMethod()
    {
        $this->assertSame(2, 1+1);
    }
}

?>
