<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Game */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="game-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 't_id')->textInput() ?>

    <?= $form->field($model, 'gt_id')->textInput() ?>

    <?= $form->field($model, 'g_start_datetime')->textInput() ?>

    <?= $form->field($model, 'g_end_datetime')->textInput() ?>

    <?= $form->field($model, 'player_id_1')->textInput() ?>

    <?= $form->field($model, 'player_id_2')->textInput() ?>

    <?= $form->field($model, 'product_id')->textInput() ?>

    <?= $form->field($model, 'product_qty')->textInput() ?>

    <?= $form->field($model, 'product_t_price')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
