<?php

namespace WyriHaximus\Tests\RectorPHP\Rules\ReplaceTestFunctionPrefixWithAttributeRector\Fixture;

class SomeClass
{
    public function testNotInTestClass()
    {
    }
}

?>
-----
<?php

namespace WyriHaximus\Tests\RectorPHP\Rules\ReplaceTestFunctionPrefixWithAttributeRector\Fixture;

class SomeClass
{
    public function testNotInTestClass()
    {
    }
}

?>
