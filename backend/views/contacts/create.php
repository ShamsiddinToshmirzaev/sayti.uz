<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Contacts */

$this->title = Yii::t('app', 'Create');
Yii::$app->params['sub-title'] = Yii::t('app', 'Contacts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contacts-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
