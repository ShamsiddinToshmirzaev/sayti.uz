<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Sites */

$this->title = Yii::t('app', 'Update');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sites'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="sites-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
