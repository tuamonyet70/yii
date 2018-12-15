<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\DataSiswa */

$this->title = 'Create Data Siswa';
$this->params['breadcrumbs'][] = ['label' => 'Data Siswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-siswa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
