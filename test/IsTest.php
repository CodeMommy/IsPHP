<?php

/**
 * @author Candison November <www.kandisheng.com>
 */

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use CodeMommy\IsPHP\Is;

class IsTest extends TestCase
{
    /**
     * Test php
     * @return void
     */
    public function testPHP()
    {
        $this->assertTrue(Is::php());
    }

    /**
     * China Cell Phone Number Provider
     * @return array
     */
    public function chinaCellPhoneNumberProvider()
    {
        return array(
            array('13333333333', true),
            array('1234456', false),
            array('133333333333', false)
        );
    }

    /**
     * Test chinaCellPhoneNumber
     * @dataProvider chinaCellPhoneNumberProvider
     *
     * @param string $testCase
     * @param bool $result
     *
     * @return void
     */
    public function testChinaCellPhoneNumber($testCase, $result)
    {
        $this->assertEquals($result, Is::chinaCellPhoneNumber($testCase));
    }

    /**
     * Email Provider
     * @return array
     */
    public function emailProvider()
    {
        return array(
            array('abc@abc.com', true),
            array('abc@', false)
        );
    }

    /**
     * Test email
     * @dataProvider emailProvider
     *
     * @param string $testCase
     * @param bool $result
     *
     * @return void
     */
    public function testEmail($testCase, $result)
    {
        $this->assertEquals($result, Is::email($testCase));
    }
}