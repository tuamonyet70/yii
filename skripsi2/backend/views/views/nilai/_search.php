<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model guru\models\NilaiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nilai-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'mata_pelajaran') ?>

    <?= $form->field($model, 'tugas1') ?>

    <?= $form->field($model, 'tugas2') ?>

    <?= $form->field($model, 'uts') ?>

    <?php // echo $form->field($model, 'uas') ?>

    <?php // echo $form->field($model, 'total_nilai') ?>

    <?php // echo $form->field($model, 'nilai_rata_rata') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
