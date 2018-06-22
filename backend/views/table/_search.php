<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TableSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="table-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 't_id') ?>

    <?= $form->field($model, 'tt_id') ?>

    <?= $form->field($model, 't_name') ?>

    <?= $form->field($model, 't_location') ?>

    <?= $form->field($model, 't_purchasing_date') ?>

    <?php // echo $form->field($model, 't_first_repairing_date') ?>

    <?php // echo $form->field($model, 't_sheet_change_date') ?>

    <?php // echo $form->field($model, 't_description') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
