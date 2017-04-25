<?php
/**
 * This file is part of the domain-identity project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Identity;

final class IntegerIdTest extends \PHPUnit_Framework_TestCase
{
    public function test_should_return_integer_value()
    {
        $id = new IntegerId(12);
        $this->assertSame('12', $id->toString());
    }

    /**
     * @param $id
     *
     * @dataProvider provideInvalidValues
     *
     * @expectedException        \Star\Component\Identity\Exception\InvalidArgumentException
     * @expectedExceptionMessage is not an integer value.
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
            array(null),
        );
    }

    public function test_it_should_be_converted_to_string()
    {
        $this->assertSame('123', (new IntegerId(123))->toString());
    }
}
