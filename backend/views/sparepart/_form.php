<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Sparepart $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="sparepart-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'spp_id')->textInput() ?>

    <?= $form->field($model, 'spp_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spp_costexcl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spp_vatperc')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
