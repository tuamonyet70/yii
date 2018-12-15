<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\DataNilai */

$this->title = 'Create Data Nilai';
$this->params['breadcrumbs'][] = ['label' => 'Data Nilais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-nilai-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
