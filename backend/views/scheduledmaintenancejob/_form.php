<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Scheduledmaintenancejob $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="scheduledmaintenancejob-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'smj_id')->textInput() ?>

    <?= $form->field($model, 'smjtsl_id')->textInput() ?>

    <?= $form->field($model, 'smjeng_id')->textInput() ?>

    <?= $form->field($model, 'smjmjb_id')->textInput() ?>

    <?= $form->field($model, 'smj_title')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
