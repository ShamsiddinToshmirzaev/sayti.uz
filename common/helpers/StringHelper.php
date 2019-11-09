<?php
/**
 * Created by PhpStorm.
 * User: abdualiym
 * Date: 10/22/18
 * Time: 5:21 PM
 */

namespace common\helpers;


class StringHelper
{
    public static function slice($string, $maxlen, $trail = ' ...')
    {
        mb_internal_encoding("UTF-8");

        $primaryString = mb_substr($string, 0, $maxlen);

        $length = mb_strlen($string) > $maxlen ? mb_strripos($primaryString, ' ') : $maxlen;

        $cutString = mb_substr($primaryString, 0, $length);

        if (mb_strlen($string) > $maxlen) {
            $cutString = $cutString . $trail;
        }

        return $cutString;
    }


}