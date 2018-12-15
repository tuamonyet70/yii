<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DataSiswaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-siswa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'NIS') ?>

    <?= $form->field($model, 'Nama_Siswa') ?>

    <?= $form->field($model, 'jenis_kelamin') ?>

    <?= $form->field($model, 'agama') ?>

    <?php // echo $form->field($model, 'tanggal_lahir') ?>

    <?php // echo $form->field($model, 'Pekerjaan_orang_Tua') ?>

    <?php // echo $form->field($model, 'Alamat_Peserta_Didik') ?>

    <?php // echo $form->field($model, 'ayah') ?>

    <?php // echo $form->field($model, 'ibu') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
