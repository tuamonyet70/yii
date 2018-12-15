<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DataNilai */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-nilai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nis')->textInput() ?>

    <?= $form->field($model, 'Nama_Siswa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_nilai')->textInput() ?>

    <?= $form->field($model, 'rata_rata_nilai')->textInput() ?>

    <?= $form->field($model, 'ektrakurikuler')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ketidakhadiran')->textInput() ?>

    <?= $form->field($model, 'total_nilai')->textInput() ?>

    <?= $form->field($model, 'catatan_wali_kelas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'naik_ke_kelas')->textInput() ?>

    <?= $form->field($model, 'tinggal_di_kelas')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
