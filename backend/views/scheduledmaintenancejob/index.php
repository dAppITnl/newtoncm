<?php

use backend\models\Scheduledmaintenancejob;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var backend\models\ScheduledmaintenancejobSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Scheduledmaintenancejobs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scheduledmaintenancejob-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Scheduledmaintenancejob', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'smj_id',
            'smjtsl_id',
            'smjeng_id',
            'smjmjb_id',
            'smj_title',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Scheduledmaintenancejob $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'smj_id' => $model->smj_id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
