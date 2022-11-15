<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\SparepartSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="sparepart-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'spp_id') ?>

    <?= $form->field($model, 'spp_name') ?>

    <?= $form->field($model, 'spp_costexcl') ?>

    <?= $form->field($model, 'spp_vatperc') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
