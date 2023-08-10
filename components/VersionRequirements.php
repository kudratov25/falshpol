<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 04.05.2023
 * Time: 18:48
 */

namespace app\components;

use yii\base\Component;
use yii\helpers\ArrayHelper as YiiArrayHelper;

class VersionRequirements extends Component
{
    public static function getValue($array, $key, $default = null)
    {
        if (version_compare(PHP_VERSION, "7.4.0", ">=")) {
            return YiiArrayHelper::getValue($array, $key, $default);
        } else {
            if (isset($array[$key])) {
                return $array[$key];
            }
            return $default;
        }
    }
    //sintaksis yoki umumiy xato bo'lmasa ishlashi shart emas!
    public function convertCode($code)
    {
        $error = null;

        try {
            eval($code);
        } catch (\ParseError $e) {
            $error = $e;
            $code = $this->convert($code);
        }

        return [$code, $error];
    }
    //8.1 dagi kodlarni 7.4 ga o'tkazish
    public static function convert(string $function): string
    {
        if (version_compare(PHP_VERSION, "8.1.0", ">=")) {
            return $function;
        }

        $tokens = token_get_all($function);
        $converted = "";

        foreach ($tokens as $token) {
            if (is_array($token)) {
                list($id, $text) = $token;
            } else {
                $id = null;
                $text = $token;
            }

            if ($id === T_IDENTIFIER && strtolower($text) === "never") {
                $converted .= "bool";
            } else {
                $converted .= $text;
            }
        }

        return $converted;
    }
    //eski versiyadagi kod

    public function lowPhpFunction($param, $never)
    {
        return "Bu funksiya bu parametr bilan chaqirilgan: " . $param;
    }
}
