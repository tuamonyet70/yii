<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\BiodataSiswa */

$this->title = 'Create Biodata Siswa';
$this->params['breadcrumbs'][] = ['label' => 'Biodata Siswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="biodata-siswa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
