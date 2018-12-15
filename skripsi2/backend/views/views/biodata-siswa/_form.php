<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\BiodataSiswa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="biodata-siswa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NIS')->textInput() ?>

    <?= $form->field($model, 'semester')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jurusan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kelas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_kelamin')->dropDownList([ 'Perempuan' => 'Perempuan', 'Laki-laki' => 'Laki-laki', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tempat_tinggal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ayah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ibu')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
