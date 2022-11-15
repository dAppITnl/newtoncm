<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Scheduledmaintenancejob $model */

$this->title = 'Create Scheduledmaintenancejob';
$this->params['breadcrumbs'][] = ['label' => 'Scheduledmaintenancejobs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scheduledmaintenancejob-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
