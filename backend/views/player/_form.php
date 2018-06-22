<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Player */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="player-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'p_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_cnic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_age')->dropDownList([ '10 Years' => '10 Years', '11 Years' => '11 Years', '12 Years' => '12 Years', '13 Years' => '13 Years', '14 Years' => '14 Years', '15 Years' => '15 Years', '16 Years' => '16 Years', '17 Years' => '17 Years', '18 Years' => '18 Years', '19 Years' => '19 Years', '20 Years' => '20 Years', '21 Years' => '21 Years', '22 Years' => '22 Years', '23 Years' => '23 Years', '24 Years' => '24 Years', '25 Years' => '25 Years', '26 Years' => '26 Years', '27 Years' => '27 Years', '28 Years' => '28 Years', '29 Years' => '29 Years', '30 Years' => '30 Years', '31 Years' => '31 Years', '32 Years' => '32 Years', '33 Years' => '33 Years', '34 Years' => '34 Years', '35 Years' => '35 Years', '36 Years' => '36 Years', '37 Years' => '37 Years', '38 Years' => '38 Years', '39 Years' => '39 Years', '40 Years' => '40 Years', '41 Years' => '41 Years', '42 Years' => '42 Years', '43 Years' => '43 Years', '44 Years' => '44 Years', '45 Years' => '45 Years', '46 Years' => '46 Years', '47 Years' => '47 Years', '48 Years' => '48 Years', '49 Years' => '49 Years', '50 Years' => '50 Years', '51 Years' => '51 Years', '52 Years' => '52 Years', '53 Years' => '53 Years', '54 Years' => '54 Years', '55 Years' => '55 Years', '56 Years' => '56 Years', '57 Years' => '57 Years', '58 Years' => '58 Years', '59 Years' => '59 Years', '60 Years' => '60 Years', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
