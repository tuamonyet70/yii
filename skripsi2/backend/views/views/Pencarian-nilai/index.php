<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PencarianNilaiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pencarian Nilais';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pencarian-nilai-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pencarian Nilai', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'mata_pelajaran',
            'tugas1',
            'tugas2',
            'uts',
            'uas',
            // 'total_nilai',
            // 'nilai_rata_rata',
            // 'id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
