<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DataSiswa */

$this->title = 'Update Data Siswa: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Data Siswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="data-siswa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
