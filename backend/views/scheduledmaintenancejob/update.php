<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Scheduledmaintenancejob $model */

$this->title = 'Update Scheduledmaintenancejob: ' . $model->smj_id;
$this->params['breadcrumbs'][] = ['label' => 'Scheduledmaintenancejobs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->smj_id, 'url' => ['view', 'smj_id' => $model->smj_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="scheduledmaintenancejob-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
