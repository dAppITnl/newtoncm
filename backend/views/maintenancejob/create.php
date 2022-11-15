<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Maintenancejob $model */

$this->title = 'Create Maintenancejob';
$this->params['breadcrumbs'][] = ['label' => 'Maintenancejobs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maintenancejob-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
