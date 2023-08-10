<?php

/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 21.11.2022
 * Time: 19:27
 */

date_default_timezone_set("Asia/Tashkent");
return [
    "class" => "yii\db\Connection",
    'commandClass' => 'app\components\BaseCommand',
    "dsn" => "mysql:host=localhost;dbname=falshpol2",
    "username" => "root",
    "password" => "",
    "charset" => "utf8",
    
    // ma'lumotlar bazasi konfiguratsiyasi 
    "on afterOpen" => function ($event) {
        // $event->sender ulanishiga ishora qiladi
        $event->sender
            ->createCommand("SET time_zone = 'Asia/Tashkent'")
            ->execute();
    },
];
