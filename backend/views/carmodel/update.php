<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Carmodel $model */

$this->title = 'Update Carmodel: ' . $model->cmd_id;
$this->params['breadcrumbs'][] = ['label' => 'Carmodels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cmd_id, 'url' => ['view', 'cmd_id' => $model->cmd_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="carmodel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
