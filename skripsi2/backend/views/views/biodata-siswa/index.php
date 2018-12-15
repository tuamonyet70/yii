<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\BiodataSiswaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Biodata Siswas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="biodata-siswa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Biodata Siswa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'pjax'=>true,
        'striped'=>true,
        'hover'=>true,
        'panel'=>['type'=>'primary', 'heading'=>'Data siswa'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute'=>'NIS',
                'pageSummary'=>'NIS',
                'pageSummaryOptions'=>['class'=>'text-center text-warning'],
            ],
          [
                'attribute'=>'semester',
                'pageSummary'=>'SEMESTER',
                'pageSummaryOptions'=>['class'=>'text-center text-warning'],
            ],
              [
                'attribute'=>'jurusan',
                'pageSummary'=>'JURUSAN',
                'pageSummaryOptions'=>['class'=>'text-right text-warning'],
            ],
            [
                'attribute'=>'kelas',
                'pageSummary'=>'KELAS',
                'pageSummaryOptions'=>['class'=>'text-right text-warning'],
            ],
            [
                'attribute'=>'first_name',
                'pageSummary'=>'NAMA DEPAN',
                'pageSummaryOptions'=>['class'=>'text-right text-warning'],
            ],
            [
                'attribute'=>'last_name',
                'pageSummary'=>'NAMA BELAKANG',
                'pageSummaryOptions'=>['class'=>'text-right text-warning'],
            ],
            [
                'attribute'=>'tanggal_lahir',
                'pageSummary'=>'TANGGAL_LAHIR',
                'pageSummaryOptions'=>['class'=>'text-right text-warning'],
            ],
            [
                'attribute'=>'jenis_kelamin',
                'pageSummary'=>'JENIS KELAMIN',
                'pageSummaryOptions'=>['class'=>'text-right text-warning'],
            ],
            [
                'attribute'=>'tempat_tinggal',
                'pageSummary'=>'TEMPAT TINGGAL',
                'pageSummaryOptions'=>['class'=>'text-right text-warning'],
            ],
            [
                'attribute'=>'ayah',
                'pageSummary'=>'AYAH',
                'pageSummaryOptions'=>['class'=>'text-right text-warning'],
            ],
            [
                'attribute'=>'ibu',
                'pageSummary'=>'IBU',
                'pageSummaryOptions'=>['class'=>'text-right text-warning'],
            ],
        ],
    ]); ?>
</div>
