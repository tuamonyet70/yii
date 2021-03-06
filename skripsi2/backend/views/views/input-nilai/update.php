<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\InputNilai */

$this->title = 'Update Input Nilai: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Input Nilais', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="input-nilai-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
