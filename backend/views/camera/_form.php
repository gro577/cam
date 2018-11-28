<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model backend\models\Camera */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="camera-form">

    <?php $form = ActiveForm::begin(); ?>

	
	<h2><a href="<?=$model->url?>"><?=$model->url?></a></h2>

    <h2><a href="<?=$model->base_url?>"><?=$model->base_url?></a></h2>

    <?= $form->field($model, 'title')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'alias')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'geography')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'time_zone')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'quality')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'source')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'url_type')->dropDownList([
        '0' => 'youtube',
        '1' => 'frame',
    ]); ?>

    <?= $form->field($model, 'publicate')->dropDownList([
        '0' => 'не опубликована',
        '1' => 'опубликована',
    ]); ?>

    <?= $form->field($model, 'moderated')->dropDownList([
        '0' => 'не модерирована',
        '1' => 'модерирована',
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>