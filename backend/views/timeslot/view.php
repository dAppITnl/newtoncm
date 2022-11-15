<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\Timeslot $model */

$this->title = $model->tsl_id;
$this->params['breadcrumbs'][] = ['label' => 'Timeslots', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="timeslot-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'tsl_id' => $model->tsl_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'tsl_id' => $model->tsl_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'tsl_id',
            'tsl_starttime',
            'tsl_endtime',
        ],
    ]) ?>

</div>
