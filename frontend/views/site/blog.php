<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

?>


<header style="margin-top:70px; background-color: #ffffff;">
    <div class="container">
        <div class="row">
            <div class="col-md-12  p-sm-0">
                <nav aria-label="breadcrumb"
                     style="padding: 8px 5px !important; box-shadow: 0px 0px 0px white !important;">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/"><i class="fas fa-home fa-md"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Блог</li>
                    </ol>
                </nav>
            </div>

            <div class="col-md-12">
                <h3 class="text-center upperCase">Блог</h3>
            </div>


            <?php
            foreach ($blogs as $blog):
                ?>

                <div class="row">
                    <div class="col-md-6">
                        <div class="blogInfos">
                            <img src="<?= $blog->getImageFileUrl('photo', Yii::getAlias('@storageHostInfo/data/articles/[[attribute_id]]/[[filename]].[[extension]]')); ?>"
                                 style="width: 555px; height: 303.5px" alt="W3schools.com">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h4 class="text-center"><?= $blog['title_0']; ?></h4>
                            <p><?= $blog['content_0']; ?></p>
                            <p><span class="calendarColor"><i class="far fa-calendar-alt"></i><?= $blog['date']; ?></span><span class="float-right calendarColor"><i class="far fa-eye">11231231</i> </span>
                            </p>
                        </div>
                    </div>

                </div>


            <?php
            endforeach;
            ?>

        </div>
    </div>
</header>
