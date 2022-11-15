<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\Sparepart $model */

$this->title = $model->spp_id;
$this->params['breadcrumbs'][] = ['label' => 'Spareparts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="sparepart-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'spp_id' => $model->spp_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'spp_id' => $model->spp_id], [
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
            'spp_id',
            'spp_name',
            'spp_costexcl',
            'spp_vatperc',
        ],
    ]) ?>

</div>
