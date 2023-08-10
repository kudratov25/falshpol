<?php foreach ($galleryImages as $image) : ?>
    <img width="150px" src="<?= Yii::$app->request->baseUrl ?>/web/<?= $image->image ?>">
<?php endforeach; ?>
