<?php

$params = require __DIR__ . "/params.php";
$db = require __DIR__ . "/db.php";
require_once dirname(__DIR__) . "/config/configuration.php"; //Buferizatsiya
require dirname(__DIR__) . "/config/aliases.php"; //Aliyaslar
require dirname(__DIR__) . "/config/defines.php"; //O'zgarmaslar

$config = [
    "id" => "basic",
    "timeZone" => "Asia/Tashkent",
    "name" => "Flashpol",
    "basePath" => dirname(__DIR__),
    "language" => "ru",
    "sourceLanguage" => "ru",
    "aliases" => [
        "@bower" => "@vendor/bower-asset",
        "@npm" => "@vendor/npm-asset",
    ],
    "modules" => [
        "admin" => [
            "class" => "app\modules\admin\Module",
            "layout" => "admin",
            "defaultRoute" => "admin/index",
        ],
        "view" => [
            "theme" => [
                "pathMap" => [
                    "@app/views" => "@vendor/hail812/yii2-adminlte3/src/views",
                ],
            ],
        ],
    ],

    "components" => [
        "request" => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            "cookieValidationKey" => "Uf2nlEr2QDKTDmEBBqlogDsmRUrah_p0",
            "baseUrl" => "",
        ],
        //1C bitrix24
        "bitrix" => [
            "class" => "app\helpers\BitrixHelper",
        ],
        //PHP versiya
        "phpver" => [
            "class" => "app\components\VersionRequirements",
        ],
        "cache" => [
            "class" => "yii\caching\FileCache",
        ],
        "user" => [
            "identityClass" => "app\models\User",
            "class" => "app\components\RootUser",
            "idParam" => "__user_id",
            "identityCookie" => [
                "name" => "_user_",
                "httpOnly" => true,
                "expire" => 0, // brauzer yopilganda muddati tugaydi
            ],
            "enableAutoLogin" => true,
            "loginUrl" => "/admin/auth/login",
        ],
        "session" => [
            "class" => "yii\web\Session",
            "timeout" => 2, // session timeout is 20 minutes
        ],
        "errorHandler" => [
            "errorAction" => "site/error",
        ],
        "mailer" => [
            "class" => \yii\symfonymailer\Mailer::class,
            "viewPath" => "@app/mail",
            // send all mails to a file by default.
            "useFileTransport" => true,
        ],
        "log" => [
            "traceLevel" => YII_DEBUG ? 3 : 0,
            "targets" => [
                [
                    "class" => "yii\log\FileTarget",
                    "levels" => ["error", "warning"],
                ],
            ],
        ],
        "db" => $db,

        "i18n" => [
            "translations" => [
                "common*" => [
                    "class" => "yii\i18n\PhpMessageSource",
                    "basePath" => "@app/messages",
                ],
                "app*" => [
                    "class" => "yii\i18n\PhpMessageSource",
                    "basePath" => "@app/messages",
                ],
            ],
        ],
        "urlManager" => [
            "class" => "codemix\localeurls\UrlManager",
            "languages" => ["uz", "ru", "en"],
            "enableDefaultLanguageUrlCode" => true,
            "enableLanguageDetection" => true,
            "enablePrettyUrl" => true,
            "showScriptName" => false,
            "rules" => [
                "/" => "site/index",
                "montage" => "site/montage",
                "montage" => "site/montage",
                "about" => "site/about",
                "typefalshpol" => "site/typefalshpol",
                "projects" => "site/projects",
                "falshpol-show-type/<id:\d+>" => "site/falshpol-type-show",
                "premises-show/<id:\d+>" => "site/premises-show",
            ],
        ],
    ],
    "controllerMap" => [
        "elfinder" => [
            "class" => 'mihaildev\elfinder\PathController',
            "access" => ["@"],
            "root" => [
                "baseUrl" => "/web",
                "path" => "upload/files",
                "name" => "Files",
            ],
        ],
    ],
    "params" => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config["bootstrap"][] = "debug";
    $config["modules"]["debug"] = [
        "class" => "yii\debug\Module",
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config["bootstrap"][] = "gii";
    $config["modules"]["gii"] = [
        "class" => "yii\gii\Module",
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
