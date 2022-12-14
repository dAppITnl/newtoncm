<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Maintenancejob $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="maintenancejob-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mjb_id')->textInput() ?>

    <?= $form->field($model, 'mjb_title')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
