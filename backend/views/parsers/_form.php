<?php

use yii\helpers\Html;
use yii\jui\DatePicker;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Parsers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tags-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'domain')->textInput() ?>

    <?= $form->field($model, 'description')->textInput() ?>
    <?= $form->field($model, 'registrar')->textInput() ?>
    <?= $form->field($model, 'status')->dropDownList(['0' =>0, '1'=> '1'], ['prompt'=>'Choose']) ?>
    <?= $form->field($model, 'expires_at')->widget(DatePicker::className(), [
        'language' => 'en',
        'options' => ['autocomplete'=>'on','readOnly'=>true],
        'clientOptions'=>[
            'changeMonth'=>true,
            'changeYear'=> true,
            'yearRange'=> "+0:+50",
            'minDate'=> "+0",
            'dateFormat' => 'dd/mm/yy',
        ],
    ])->label(false) ?>





    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
