<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\Maintenancejob $model */

$this->title = $model->mjb_id;
$this->params['breadcrumbs'][] = ['label' => 'Maintenancejobs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="maintenancejob-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'mjb_id' => $model->mjb_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'mjb_id' => $model->mjb_id], [
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
            'mjb_id',
            'mjb_title',
        ],
    ]) ?>

</div>
