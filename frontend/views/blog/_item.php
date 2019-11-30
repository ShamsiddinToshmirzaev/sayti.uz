<?php

use yii\helpers\Url;

?>
<div class="row item" data-key="135">
    <div class="col-md-12">
        <div class="separator"></div>
    </div>

    <div class="col-sm-4">
        <a href="<?= Url::to(['blog/view', 'slug' => $model->slug]) ?>" data-pjax="0"><img class="img-responsive" src="<?= $model->getThumbFileUrl('photo','sm', Yii::getAlias('@storageHostInfo/data/articles/[[attribute_id]]/[[filename]].[[extension]]')); ?>" alt="<?= $model->category->title_0 ?>"></a>
    </div>

    <div class="col-sm-8">
        <h4 class="title"><a href="<?= Url::to(['blog/view', 'slug' => $model->slug]) ?>" data-pjax="0"><?= $model->title_0 ?></a></h4>
        <p class="text"><?= \common\helpers\StringHelper::slice($model->content_0, 133) ?></p>
        <p class="more">
            <a class="btn btn-default" href="<?= Url::to(['blog/view', 'slug' => $model->slug]) ?>" data-pjax="0"><?= Yii::t('app', 'Read more') ?></a> <span class="pull-right date">
            <i class="fa fa-calendar"></i> <?= Yii::$app->formatter->asDate($model->date) ?></span>
        </p>
    </div>
</div>