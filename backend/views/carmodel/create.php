<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Carmodel $model */

$this->title = 'Create Carmodel';
$this->params['breadcrumbs'][] = ['label' => 'Carmodels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carmodel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
