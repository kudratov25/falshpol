<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 30.04.2023
 * Time: 18:48
 */

return [
    'class' => 'yii\swiftmailer\Mailer',
    'viewPath' => '@app/mail',
    'useFileTransport' => false,
    'transport' => [
        'class' => 'Swift_SmtpTransport',
        'host' => 'smtp.mail.ru',
        'username' => 'noreply@falshpol.uz',
        'password' => 'password',
        'port' => '465',
        'encryption' => 'ssl',
    ],
];