<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\Carmodel $model */

$this->title = $model->cmd_id;
$this->params['breadcrumbs'][] = ['label' => 'Carmodels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="carmodel-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'cmd_id' => $model->cmd_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'cmd_id' => $model->cmd_id], [
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
            'cmd_id',
            'cmdbrd_id',
            'cmd_name',
        ],
    ]) ?>

</div>
