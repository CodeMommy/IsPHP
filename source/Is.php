<?php

/**
 * CodeMommy IsPHP
 * @author Candison November <www.kandisheng.com>
 */

namespace CodeMommy\IsPHP;

class Is
{
    /**
     * Is PHP
     * @param void
     * @return bool
     */
    public static function php()
    {
        return true;
    }

    /**
     * Is Email
     * @param string $email
     * @return bool
     */
    public static function email($email)
    {
        $regularExpression = '/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/';
        if (preg_match($regularExpression, $email)) {
            return true;
        }
        return false;
    }

    /**
     * Is China Cell Phone Number
     * @param string $number
     * @return bool
     */
    public static function chinaCellPhoneNumber($number)
    {
        $regularExpression = '/^1[3456789]\d{9}$/';
        if (preg_match($regularExpression, $number)) {
            return true;
        }
        return false;
    }
}