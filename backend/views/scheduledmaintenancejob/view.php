<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\Scheduledmaintenancejob $model */

$this->title = $model->smj_id;
$this->params['breadcrumbs'][] = ['label' => 'Scheduledmaintenancejobs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="scheduledmaintenancejob-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'smj_id' => $model->smj_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'smj_id' => $model->smj_id], [
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
            'smj_id',
            'smjtsl_id',
            'smjeng_id',
            'smjmjb_id',
            'smj_title',
        ],
    ]) ?>

</div>
