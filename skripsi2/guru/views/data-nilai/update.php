<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DataNilai */

$this->title = 'Update Data Nilai: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Data Nilais', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-nilai-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
