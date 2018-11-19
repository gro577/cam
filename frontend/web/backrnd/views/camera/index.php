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
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'url:ntext',
            'base_url:ntext',
            'title:ntext',
            'breadcrumbs:ntext',
            //'preview:ntext',
            //'description:ntext',
            //'geography:ntext',
            //'time_zone:ntext',
            //'quality:ntext',
            //'source:ntext',
            //'url_type:url',
            //'publicate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
