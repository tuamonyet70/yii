<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Siswas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-siswa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Data Siswa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
         'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
       //'showPageSummary'=>true,
        //'pjax'=>true,
        //'striped'=>true,
        //'hover'=>true,
        'panel'=>['type'=>'primary', 'heading'=>'Daftar Siswa'],
        'columns'=>[
            ['class'=>'kartik\grid\SerialColumn','header'=>'No'], 

            'id',
            'Nama_Siswa',
            'NISN',
            'jenis_kelamin',
            'agama',
            'tanggal_lahir',
            'Pekerjaan_orang_Tua',
            'Alamat_Peserta_Didik',
            'ayah',
            'ibu',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
