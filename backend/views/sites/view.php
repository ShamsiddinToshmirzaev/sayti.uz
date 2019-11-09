<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Sites */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sites'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sites-view">

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

<!--//= DetailView::widget([-->
<!--//        'model' => $model,-->
<!--//        'attributes' => [-->
<!--//            'created_by.username',-->
<!--//            'created_at:datetime',-->
<!--//            'updated_at:datetime',-->
<!--//        ],-->
<!--//    ]) -->

    <div class="row">
        <div class="col-sm-4">
            <div class="box">
                <div class="box-body">
                    <img src="<?= $model->getThumbFileUrl('photo', 'xs', Yii::getAlias('@url/app-images/store/sites/[[attribute_id]]/[[filename]].[[extension]]')) ?>">
                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'id',

                        ],
                    ]) ?>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="box">
                <div class="box-body">
                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'title',
                            'views',
                        ],
                    ]) ?>
                </div>
            </div>
        </div>
    </div>

</div>
