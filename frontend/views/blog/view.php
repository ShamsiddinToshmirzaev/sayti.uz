<?php

use yii\helpers\Url;

$this->title = $article->title_0;
$this->params['breadcrumbs'][] = ['label' => $article->category->title_0, 'url' => ['blog/index']];
$this->params['breadcrumbs'][] = ['label' => $this->title];
?>

<!-- Page title -->
<section style="margin-top: 350px;" id="page-title" class="background-overlay" data-parallax-image="/images/parallax/14.jpg">
    <div class="container">
        <div class="page-title">
            <h1 class="text-uppercase text-medium"><?= $article->title_0 ?></h1>
            <span>Work is easy when you have all tools around you!</span>
        </div>
    </div>
</section>
<!-- end: Page title -->

<div class="post-view">
    <div class="container">
        <div class="box">
            <h3 class="title"><?= $article->title_0 ?></h3>
            <div class="info">
                <div class="pull-left">
                    <a href="<?= Url::to(['blog/index']) ?>"><i class="fa fa-circle-o"></i><?= $article->category->title_0 ?></a>
                </div>
                <div class="pull-right">
                    <i class="fa fa-calendar"></i><?= Yii::$app->formatter->asDate($article->date) ?>
<!--                    <b>|</b><i class="fa fa-eye"></i>581-->
                </div>
                <div class="clearfix"></div>
            </div>
<!--            --><?php //= $article->getThumbFileUrl('photo','sm', Yii::getAlias('@storageHostInfo/data/articles/[[attribute_id]]/[[filename]].[[extension]]')); ?>
            <br>
            <?= $article->content_0 ?>
        </div>
    </div>
</div>
