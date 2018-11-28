<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Camera */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Cameras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="camera-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            //'url:ntext',
			[
                'attribute'=>'url',
                'format'=>'html',
                'value'=>function($data){
        return "<a href=\"$data->url\">$data->url</a>";
                }
            ],
            //'base_url:ntext',
            [
                'attribute'=>'base_url',
                'format'=>'html',
                'value'=>function($data){
        return "<a href=\"$data->base_url\">$data->base_url</a>";
                }
            ],
            'title:ntext',
            'breadcrumbs:ntext',
            'preview:ntext',
            'description:ntext',
            'geography:ntext',
            'time_zone:ntext',
            'quality:ntext',
            'source:ntext',
            'url_type:url',
            'publicate',
        ],
    ]) ?>

</div>