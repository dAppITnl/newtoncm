<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Sparepart $model */

$this->title = 'Update Sparepart: ' . $model->spp_id;
$this->params['breadcrumbs'][] = ['label' => 'Spareparts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->spp_id, 'url' => ['view', 'spp_id' => $model->spp_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sparepart-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
