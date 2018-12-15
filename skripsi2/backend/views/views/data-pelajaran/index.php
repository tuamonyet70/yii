<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Pelajaran';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-pelajaran-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Data Pelajaran', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pelajaran',
            'guru_pengajar',
            'semester',
            'id',
            'jurusan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
