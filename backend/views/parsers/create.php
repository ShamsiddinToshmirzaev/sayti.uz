<?php

/* @var $this yii\web\View */
/* @var $model backend\models\Parsers */

$this->title = Yii::t('app', 'Create');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Parsers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buildings-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
