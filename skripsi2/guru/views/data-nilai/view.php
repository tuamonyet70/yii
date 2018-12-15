<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\DataNilai */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Data Nilais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-nilai-view">

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

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nis',
            'Nama_Siswa',
            'jumlah_nilai',
            'rata_rata_nilai',
            'ektrakurikuler',
            'ketidakhadiran',
            'total_nilai',
            'catatan_wali_kelas',
            'naik_ke_kelas',
            'tinggal_di_kelas',
        ],
    ]) ?>

</div>
