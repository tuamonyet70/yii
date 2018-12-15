<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Nilai Raport';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-nilai-index">

    <h1><?= Html::encode($this->title) ?></h1>

    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'panel'=>['type'=>'primary', 'heading'=>'Daftar Nilai'],
        'columns'=>[
            ['class'=>'kartik\grid\SerialColumn','header'=>'No'], 

            //'id',
            [
                'attribute'=>'nis',
                'pageSummary'=>'nis',
                'pageSummaryOptions'=>['class'=>'text-right text-warning'],
            ],
            [
                'attribute'=>'Nama_Siswa',
                'pageSummary'=>'Nama_Siswa',
                'pageSummaryOptions'=>['class'=>'text-right text-warning'],
            ],
            [
            'attribute'=>'jumlah_nilai',
            'width'=>'150px',
            'hAlign'=>'left',
            'format'=>['decimal', 2],
            'pageSummary'=>'jumlah_nilai',
            'pageSummaryFunc'=>GridView::F_AVG
            ],
            [
            'attribute'=>'rata_rata_nilai',
            'width'=>'150px',
            'hAlign'=>'right',
            'format'=>['decimal', 2],
            'pageSummary'=>'rata_rata_nilai',
            'pageSummaryFunc'=>GridView::F_AVG
            ],
             'ektrakurikuler',
            'ketidakhadiran',
            [
            'attribute'=>'total_nilai',
            'width'=>'150px',
            'hAlign'=>'right',
            'format'=>['decimal', 1],
            'pageSummaryFunc'=>GridView::F_AVG
            ],
            'catatan_wali_kelas',
            'naik_ke_kelas',
            'tinggal_di_kelas',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
