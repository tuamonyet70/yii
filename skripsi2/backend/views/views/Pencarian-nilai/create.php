<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\PencarianNilai */

$this->title = 'Create Pencarian Nilai';
$this->params['breadcrumbs'][] = ['label' => 'Pencarian Nilais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pencarian-nilai-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
