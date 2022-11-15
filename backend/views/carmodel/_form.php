<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Carmodel $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="carmodel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cmd_id')->textInput() ?>

    <?= $form->field($model, 'cmdbrd_id')->textInput() ?>

    <?= $form->field($model, 'cmd_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
