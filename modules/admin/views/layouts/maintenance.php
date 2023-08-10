<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 05.05.2023
 * Time: 11:12
 */

/** @var $this \yii\web\View */
/** @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
 
\app\assets\AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Maintenance Mode</title>
    <style>
        body {
            background-color: #f1f1f1;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 50px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 36px;
            margin-top: 0;
        }
        p {
            font-size: 18px;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Техническое обслуживание</h1>
        <p>Мы скоро вернемся. Приносим извинения за неудобства, но в настоящее время мы проводим техническое обслуживание. </p>
    </div>
</body>
</html>
