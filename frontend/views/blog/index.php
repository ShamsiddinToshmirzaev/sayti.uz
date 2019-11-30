<?php

use yii\helpers\Url;
use yii\widgets\ListView;

/**
 * @var $category \abdualiym\cms\entities\ArticleCategories
 */

$category = \abdualiym\cms\entities\ArticleCategories::findOne(1);
$this->title = $category->title_0;
$this->params['breadcrumbs'][] = ['label' => $category->title_0];
?>

<!-- Page title -->
<section  style="margin-top: 120px;" id="page-title" class="background-overlay" data-parallax-image="/images/parallax/14.jpg">
    <div class="container">
        <div class="page-title">
            <h1 class="text-uppercase text-medium"><?= $category->title_0 ?></h1>
            <span>Work is easy when you have all tools around you!</span>
        </div>
    </div>
</section>
<!-- end: Page title -->

<section class="p-b-10">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="heading-text heading-section">
                    <h2><?= $category->title_0 ?></h2>
                </div>
            </div>
        <div class="box">
            <div id="p0" data-pjax-container="" data-pjax-push-state="" data-pjax-timeout="1000">
                <div id="w1" class="list-view">
                    <?= ListView::widget([
                        'dataProvider' => $dataProvider,
                        'itemOptions' => ['class' => 'item'],
                        'itemView' => '_item',
                        'summary' => '',
                        'layout' => "{items}\n{summary}\n{pager}",
                        'pager' => [
                            'options' => [
                                'tag' => 'div',
                                'class' => 'nav-links',
//                        'id' => 'pager-container',
                            ],
                            'linkOptions' => [
                                'tag' => '',
//                        'class' => 'nav-links',
//                        'id' => 'pager-container',
                            ],
                        ]
                    ])
                    ?>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
