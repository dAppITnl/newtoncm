<?php

use backend\models\Sparepart;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var backend\models\SparepartSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Spareparts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sparepart-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Sparepart', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'spp_id',
            'spp_name',
            'spp_costexcl',
            'spp_vatperc',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Sparepart $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'spp_id' => $model->spp_id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
