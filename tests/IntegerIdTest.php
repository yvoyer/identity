<?php
/**
 * This file is part of the domain-identity project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Identity;

/**
 * Class IntegerIdTest
 *
 * @author  Yannick Voyer (http://github.com/yvoyer)
 *
 * @package Star\Component\Identity
 */
final class IntegerIdTest extends \PHPUnit_Framework_TestCase
{
    public function test_should_return_integer_value()
    {
        $id = new IntegerId(12);
        $this->assertSame(12, $id->id());
    }

    public function test_should_support_null_as_default_value()
    {
        $id = new IntegerId();
        $this->assertSame(null, $id->id());
    }

    public function test_should_support_null()
    {
        $id = new IntegerId(null);
        $this->assertSame(null, $id->id());
    }

    /**
     * @param $id
     *
     * @dataProvider provideInvalidValues
     *
     * @expectedException        \Star\Component\Identity\Exception\InvalidArgumentException
     * @expectedExceptionMessage The id should be int or null value.
     */
    public function test_should_throw_exception_with_invalid_value($id)
    {
        new IntegerId($id);
    }

    public function provideInvalidValues()
    {
        return array(
            array(true),
            array(false),
            array(array()),
            array((object) array()),
            array('string'),
            array(123.321),
        );
    }

    public function test_it_should_be_converted_to_string()
    {
        $this->assertSame('123', (string) new IntegerId(123));
        $this->assertSame('', (string) new IntegerId(null));
    }
}
