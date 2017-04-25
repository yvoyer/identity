<?php
/**
 * This file is part of the domain-identity project.
 *
 * (c) Yannick Voyer (http://github.com/yvoyer)
 */

namespace Star\Component\Identity;

final class StringIdentityTest extends \PHPUnit_Framework_TestCase
{
    const CLASS_NAME = __CLASS__;

    public function test_should_support_string()
    {
        $identity = new StringIdentity('id');
        $this->assertSame('id', $identity->toString());
    }

    /**
     * @param $id
     *
     * @dataProvider provideInvalidValues
     *
     * @expectedException        \Star\Component\Identity\Exception\InvalidArgumentException
     * @expectedExceptionMessage expected to be string, type
     */
    public function test_should_throw_exception_with_invalid_value($id)
    {
        new StringIdentity($id);
    }

    public function provideInvalidValues()
    {
        return array(
            array(true),
            array(false),
            array(array()),
            array((object) array()),
            array(123.321),
            array(null),
        );
    }

    public function test_it_should_be_converted_to_string()
    {
        $this->assertSame('id', (new StringIdentity('id'))->toString());
    }

    /**
     * @expectedException        \Star\Component\Identity\Exception\InvalidArgumentException
     * @expectedExceptionMessage Identity value "" is empty, but non empty value was expected.
     */
    public function test_it_should_not_allow_empty_string()
    {
        new StringIdentity('');
    }
}
