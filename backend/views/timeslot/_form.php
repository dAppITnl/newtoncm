<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Timeslot $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="timeslot-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tsl_id')->textInput() ?>

    <?= $form->field($model, 'tsl_starttime')->textInput() ?>

    <?= $form->field($model, 'tsl_endtime')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
