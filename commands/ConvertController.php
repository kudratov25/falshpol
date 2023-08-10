<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 04.05.2023
 * Time: 18:24
 */

namespace app\commands;

use yii\console\Controller;
use yii\helpers\Console;

//ishga tushirish
//yii convert/index //fayl  --dryRun=1
class ConvertController extends Controller
{
    /**
     * @param string $file
     * @param bool $dryRun
     */
    public function actionIndex($file, $dryRun = false)
    {
        if (!file_exists($file)) {
            $this->stderr("File not found: {$file}\n", Console::FG_RED);
            return Controller::EXIT_CODE_ERROR;
        }

        $content = file_get_contents($file);
        $converted = self::convert($content);

        if ($dryRun) {
            $this->stdout(
                "Пробный режим включен, в файл не внесены изменения.\n",
                Console::FG_YELLOW
            );
            $this->stdout(
                "Преобразованный код:\n{$converted}\n",
                Console::FG_YELLOW
            );
            return Controller::EXIT_CODE_NORMAL;
        }

        file_put_contents($file, $converted);
        $this->stdout("Файл успешно преобразован.\n", Console::FG_GREEN);

        return Controller::EXIT_CODE_NORMAL;
    }

    /**
     * Bu kod 8.1 dagi kodlarni 7.4 ga o'tqazadi.
     * @param string $function
     * @return string
     */
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
}
