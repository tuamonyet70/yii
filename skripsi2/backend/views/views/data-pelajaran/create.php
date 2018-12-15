<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\DataPelajaran */

$this->title = 'Create Data Pelajaran';
$this->params['breadcrumbs'][] = ['label' => 'Data Pelajarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-pelajaran-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
