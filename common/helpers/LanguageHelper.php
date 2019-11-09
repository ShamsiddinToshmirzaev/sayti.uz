<?php
/**
 * Created by PhpStorm.
 * User: abdualiym
 * Date: 10/22/18
 * Time: 5:21 PM
 */

namespace common\helpers;


class LanguageHelper
{
    public static function getAttribute($className, $attributeName)
    {
        $attribute = $attributeName . '_' . \Yii::$app->language;
        return $className->$attribute;
    }
}