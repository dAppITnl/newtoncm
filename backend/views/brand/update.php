<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Brand $model */

$this->title = 'Update Brand: ' . $model->brd_id;
$this->params['breadcrumbs'][] = ['label' => 'Brands', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->brd_id, 'url' => ['view', 'brd_id' => $model->brd_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="brand-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
