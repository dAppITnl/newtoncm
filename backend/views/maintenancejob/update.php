<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Maintenancejob $model */

$this->title = 'Update Maintenancejob: ' . $model->mjb_id;
$this->params['breadcrumbs'][] = ['label' => 'Maintenancejobs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mjb_id, 'url' => ['view', 'mjb_id' => $model->mjb_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="maintenancejob-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
