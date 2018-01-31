<?php

/**
 * @author Candison November <www.kandisheng.com>
 */

declare(strict_types=1);

namespace Test;

use PHPUnit\Framework\TestCase;
use CodeMommy\FilePHP\CsvIterator;
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
     * Data Provider China Cell Phone Number
     * @return CsvIterator
     */
    public function dataProviderChinaCellPhoneNumber()
    {
        return new CsvIterator(sprintf('%s/case/ChinaCellPhoneNumber.csv', __DIR__));
    }

    /**
     * Test chinaCellPhoneNumber
     * @dataProvider dataProviderChinaCellPhoneNumber
     * @param string $testCase
     * @param bool $result
     * @return void
     */
    public function testChinaCellPhoneNumber($testCase, $result)
    {
        $result = intval($result) == 1 ? true : $result;
        $result = intval($result) == 0 ? false : $result;
        $this->assertEquals($result, Is::chinaCellPhoneNumber($testCase));
    }

    /**
     * Data Provider Email
     * @return CsvIterator
     */
    public function dataProviderEmail()
    {
        return new CsvIterator(sprintf('%s/case/Email.csv', __DIR__));
    }

    /**
     * Test email
     * @dataProvider dataProviderEmail
     * @param string $testCase
     * @param bool $result
     * @return void
     */
    public function testEmail($testCase, $result)
    {
        $result = intval($result) == 1 ? true : $result;
        $result = intval($result) == 0 ? false : $result;
        $this->assertEquals($result, Is::email($testCase));
    }
}