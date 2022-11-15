<?php

use backend\models\Carmodel;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var backend\models\CarmodelSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Carmodels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carmodel-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Carmodel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'cmd_id',
            'cmdbrd_id',
            'cmd_name',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Carmodel $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'cmd_id' => $model->cmd_id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
