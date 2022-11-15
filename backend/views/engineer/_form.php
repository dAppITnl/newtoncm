<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Engineer $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="engineer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'eng_id')->textInput() ?>

    <?= $form->field($model, 'eng_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
