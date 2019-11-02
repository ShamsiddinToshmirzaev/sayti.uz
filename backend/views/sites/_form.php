<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Sites;

/* @var $this yii\web\View */
/* @var $model backend\models\Sites */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sites-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-sm-3">

            <?php
            echo $form->field($model, 'photo')->widget(\kartik\file\FileInput::class, [
                'options' => ['accept' => 'image/*'],
                'language' => 'ru',
                'pluginOptions' => [
                    'showCaption' => false,
                    'showRemove' => false,
                    'showUpload' => false,
                    'browseClass' => 'btn btn-primary btn-block',
                    // 'browseIcon' => ' ',
                    'browseLabel' => 'Rasm',
                    'layoutTemplates' => [
                        'main1' => '<div class="kv-upload-progress hide"></div>{remove}{cancel}{upload}{browse}{preview}',
                    ],
                    'initialPreview' => [
                        Html::img($model->getThumbFileUrl('photo', 'sm'), ['class' => 'file-preview-image', 'alt' => '', 'title' => '']),
                    ],
                ],
            ]);
            ?>
        </div>

        <div class="col-sm-6">
            <?= $form->field($model, 'title')->textInput() ?>
            <?= $form->field($model, 'is_taxis')->textInput() ?>
            <?= $form->field($model, 'views')->textInput() ?>

        </div>
    </div>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
