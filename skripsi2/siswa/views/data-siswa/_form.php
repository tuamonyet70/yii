<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DataSiswa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-siswa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nama_Siswa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NISN')->textInput() ?>

    <?= $form->field($model, 'jenis_kelamin')->dropDownList([ 'Perempuan' => 'Perempuan', 'Laki-laki' => 'Laki-laki', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'agama')->dropDownList([ 'Islam' => 'Islam', 'Katolik' => 'Katolik', ' kristen' => ' kristen', 'Hindu' => 'Hindu', 'Budha' => 'Budha', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tanggal_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Pekerjaan_orang_Tua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Alamat_Peserta_Didik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ayah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ibu')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
