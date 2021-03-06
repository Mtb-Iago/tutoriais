<?php

namespace AndreasGlaser\Helpers;

/**
 * Class JsonHelper.
 */
class JsonHelper
{
    /**
     * Validates JSON input.
     *
     * @param $string
     *
     * @return bool
     */
    public static function isValid($string)
    {
        if (\is_int($string) || \is_float($string)) {
            return true;
        }

        \json_decode($string);

        return JSON_ERROR_NONE === \json_last_error();
    }

    /**
     * Encodes json string for the use in JavaScript.
     *
     * @param $string
     *
     * @return string
     */
    public static function encodeForJavaScript($string)
    {
        return \json_encode($string, JSON_HEX_QUOT | JSON_HEX_APOS);
    }
}
