<?php
use Lite\Example;

class ExampleTest extends PHPUnit_Framework_TestCase {

    public function setUp()
    {
        $this->calculator = new Example;
    }

    public function inputNumbers()
    {
        return array(
            array(2, 2, 4),
            array(2.5, 2.5, 5)
        );
    }

    /**
     * @dataProvider inputNumbers
     */
    public function testCanAddNumbers($x, $y, $sum)
    {
        $this->assertEquals($sum, $this->calculator->add($x, $y));
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testThrowsExceptionIfNonNumberIsPassed()
    {
        $calc = new Example;
        $calc->add('a', 'b');
    }
}