<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel mdm\admin\models\searchs\Guru */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Guru';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'panel'=>['type'=>'primary', 'heading'=>'Daftar Nilai'],
        'columns' => [
            ['class'=>'kartik\grid\SerialColumn','header' => 'No'],
            'username',
            'email:email',
            'created_at:date',
            [
                'attribute' => 'status',
                'value' => function($model) {
                    return $model->status == 0 ? 'Inactive' : 'Active';
                },
                'filter' => [
                    0 => 'Inactive',
                    10 => 'Active'
                ]
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'buttons' => [
                    'activate' => function($url, $model) {
                        if ($model->status == 10) {
                            return '';
                        }
                        $options = [
                            'title' => Yii::t('rbac-admin', 'Activate'),
                            'aria-label' => Yii::t('rbac-admin', 'Activate'),
                            'data-confirm' => Yii::t('rbac-admin', 'Are you sure you want to activate this user?'),
                            'data-method' => 'post',
                            'data-pjax' => '0',
                        ];
                        return Html::a('<span class="glyphicon glyphicon-ok"></span>', $url, $options);
                    }
                    ]
                ],
            ],
        ]);
        ?>
</div>
