<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PencarianNilai */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pencarian-nilai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mata_pelajaran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tugas1')->textInput() ?>

    <?= $form->field($model, 'tugas2')->textInput() ?>

    <?= $form->field($model, 'uts')->textInput() ?>

    <?= $form->field($model, 'uas')->textInput() ?>

    <?= $form->field($model, 'total_nilai')->textInput() ?>

    <?= $form->field($model, 'nilai_rata_rata')->textInput() ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
