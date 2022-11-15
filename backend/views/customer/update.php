<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Customer $model */

$this->title = 'Update Customer: ' . $model->cst_id;
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cst_id, 'url' => ['view', 'cst_id' => $model->cst_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="customer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
