<?php

use yii\helpers\Html;
use yii\grid\GridView;

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
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'mata_pelajaran',
            'tugas1',
            'tugas2',
            'uts',
            // 'uas',
            // 'total_nilai',
            // 'nilai_rata_rata',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
