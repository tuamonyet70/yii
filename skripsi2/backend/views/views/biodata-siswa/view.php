<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model common\models\BiodataSiswa */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Biodata Siswas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="biodata-siswa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= GridView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'NIS',
            'semester',
            'jurusan',
            'kelas',
            'first_name',
            'last_name',
            'tanggal_lahir',
            'jenis_kelamin',
            'tempat_tinggal',
            'ayah',
            'ibu',
        ],
    ]) ?>

</div>
