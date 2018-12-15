<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel guru\models\NilaiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nilais';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nilai-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Nilai', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
       'showPageSummary'=>true,
        'pjax'=>true,
        'striped'=>true,
        'hover'=>true,
        'panel'=>['type'=>'primary', 'heading'=>'Daftar Nilai'],
        'columns'=>[
            ['class'=>'kartik\grid\SerialColumn'], 
        
            [
                'attribute'=>'mata_pelajaran',
                'pageSummary'=>'Mata Pelajaran',
                'pageSummaryOptions'=>['class'=>'text-right text-warning'],
            ],
        
            [
                'attribute'=>'tugas1',
                'pageSummary'=>'Tugas 1',
                'pageSummaryOptions'=>['class'=>'text-right text-warning'],
            ],
            [
                'attribute'=>'tugas2',
                'width'=>'150px',
                'hAlign'=>'right',
                'pageSummary'=>'Tugas 2',
                'pageSummaryOptions'=>['class'=>'text-right text-warning'],
            ],
            [
            'attribute'=>'uts',
            'width'=>'150px',
            'hAlign'=>'right',
            'pageSummary'=>'UTS',
            'pageSummaryFunc'=>GridView::F_AVG
            ],
            [
            'attribute'=>'uas',
            'width'=>'150px',
            'hAlign'=>'right',
            'pageSummary'=>'UAS',
            'pageSummaryOptions'=>['class'=>'text-right text-warning'],
            ],
            [
            'attribute'=>'total_nilai',
            'width'=>'150px',
            'hAlign'=>'right',
            'format'=>['decimal', 1],
            'pageSummaryFunc'=>GridView::F_AVG
            ],
            [
            'attribute'=>'nilai_rata_rata',
            'width'=>'150px',
            'hAlign'=>'right',
            'format'=>['decimal', 2],
            'pageSummary'=>'NILAI_RATA_RATA',
            'pageSummaryFunc'=>GridView::F_AVG
            ],
        ],
    ]); ?>
</div>
