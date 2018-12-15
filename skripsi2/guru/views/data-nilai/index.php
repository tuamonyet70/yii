<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Nilais';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-nilai-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Data Nilai', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'pjax'=>true,
        'striped'=>true,
        'hover'=>true,
        'panel'=>['type'=>'primary', 'heading'=>'Daftar Nilai'],
        'columns'=>[
            ['class'=>'kartik\grid\SerialColumn','header'=>'No'], 
        

            //'id',
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
