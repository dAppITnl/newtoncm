<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Engineer $model */

$this->title = 'Update Engineer: ' . $model->eng_id;
$this->params['breadcrumbs'][] = ['label' => 'Engineers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->eng_id, 'url' => ['view', 'eng_id' => $model->eng_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="engineer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
