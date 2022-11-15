<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Timeslot $model */

$this->title = 'Update Timeslot: ' . $model->tsl_id;
$this->params['breadcrumbs'][] = ['label' => 'Timeslots', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tsl_id, 'url' => ['view', 'tsl_id' => $model->tsl_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="timeslot-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
