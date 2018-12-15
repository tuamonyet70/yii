<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DataPelajaran */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-pelajaran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pelajaran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'guru_pengajar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'semester')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'jurusan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
