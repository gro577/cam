<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cameras';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="camera-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Camera', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'tableOptions' => [
            'class' => 'table table-striped table-bordered',
            'style' => ' table-layout: fixed; width: 100%'],
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn',
            // ],
            [
                'attribute' => 'id',
                'options' => ['style' => 'width: 30px'],
            ],
            //'url:ntext',
            [
                'attribute' => 'url',
                'contentOptions' => ['style' => 'width: 150px!important;white-space: nowrap; overflow: hidden; text-overflow: ellipsis;'],
            ],
            [
                'attribute' => 'title',
                'contentOptions' => ['style' => 'width: 100px!important;white-space: nowrap; overflow: hidden; text-overflow: ellipsis;'],
            ],
            //'base_url:ntext',
            //'title:ntext',
            //'breadcrumbs:ntext',
            //'preview:ntext',
            [
                'attribute' => 'description',
                'contentOptions' => ['style' => 'width: 100px!important;white-space: nowrap; overflow: hidden; text-overflow: ellipsis;'],
                //     'options' =>['style'=>'width: 100px!important;overflow: hidden;white-space: nowrap;text-overflow:ellipsis;'],
            ],

            //'description:ntext',
            //'geography:ntext',
            //'time_zone:ntext',
            //'quality:ntext',
            //'source:ntext',
            //'url_type:url',
            [
                'attribute' => 'publicate',
                'options' => ['style' => 'width: 80px'],
                //     'options' =>['style'=>'width: 100px!important;overflow: hidden;white-space: nowrap;text-overflow:ellipsis;'],
            ],

            [
                'attribute' => 'moderated',
                'options' => ['style' => 'width: 100px'],
                //     'options' =>['style'=>'width: 100px!important;overflow: hidden;white-space: nowrap;text-overflow:ellipsis;'],
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'options' => ['style' => 'width: 70px'],
            ],
        ],
    ]); ?>
</div>