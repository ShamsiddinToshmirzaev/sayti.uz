<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Sites */

$this->title = Yii::t('app', 'Create');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sites'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sites-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
