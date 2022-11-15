<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\ScheduledmaintenancejobSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="scheduledmaintenancejob-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'smj_id') ?>

    <?= $form->field($model, 'smjtsl_id') ?>

    <?= $form->field($model, 'smjeng_id') ?>

    <?= $form->field($model, 'smjmjb_id') ?>

    <?= $form->field($model, 'smj_title') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
