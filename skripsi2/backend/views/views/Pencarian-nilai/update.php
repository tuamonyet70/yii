<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PencarianNilai */

$this->title = 'Update Pencarian Nilai: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pencarian Nilais', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pencarian-nilai-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
