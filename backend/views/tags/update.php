<?php

/* @var $this yii\web\View */
/* @var $model backend\models\Tags */

$this->title = Yii::t('app', 'Update');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tags'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="tags-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
