<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SitesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Sites');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sites-index">

    <?php Pjax::begin(); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'title',
            'views',
            [
                'attribute' => 'photo',
                'value' => function (\backend\models\Sites $model) {
                    return Html::a(Html::img($model->getThumbFileUrl('photo', 'md', Yii::getAlias('@url/app-images/cache/sites/[[attribute_id]]/[[profile]]_[[filename]].[[extension]]'))));
                },
                'format' => 'raw'
            ],
            'is_taxis',
            'is_new',
//
//            [
//                'attribute' => 'status',
//                'value' => function (\backend\models\Sites $model) {
//                    return $model->getStatusName($model->status);
//                },
//                'filter' => Html::activeDropDownList($searchModel, 'status', \backend\models\Sites::statusList(), ['class' => 'form-control', 'prompt' => '---']),
//            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>

</div>
