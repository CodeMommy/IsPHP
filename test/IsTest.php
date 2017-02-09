<?php

/**
 * @author  Candison November <www.kandisheng.com>
 */

declare(strict_types = 1);

require_once(__DIR__ . '/../source/Is.php');

use PHPUnit\Framework\TestCase;

use CodeMommy\IsPHP\Is;

class IsTest extends TestCase
{
    /**
     * Test chinaCellPhoneNumber
     */
    public function testChinaCellPhoneNumber()
    {
        $testCase = array(
            '13333333333'  => true,
            '1234456'      => false,
            '133333333333' => false
        );
        foreach ($testCase as $key => $value) {
            $this->assertEquals(Is::chinaCellPhoneNumber($key), $value);
        }

    }

    /**
     * Test email
     */
    public function testEmail()
    {
        $testCase = array(
            'abc@abc.com'  => true,
            'abc@'      => false
        );
        foreach ($testCase as $key => $value) {
            $this->assertEquals(Is::email($key), $value);
        }

    }
}