<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Bill */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bill-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'player_id')->textInput() ?>

<<<<<<< HEAD
    <?= $form->field($model, 'table_id')->textInput() ?>
=======
            <div class="col-md-4">
                <?= $form->field($model, 'bill_datetime')->widget(\yii\jui\DatePicker::className(), \omnilight\datetime\DatePickerConfig::get($model, 'bill_datetime')) ?>
            </div>
        </div>
>>>>>>> 61517c1321f890c27ea2a4c0d52c6cc49d0eb4b0

    <?= $form->field($model, 'bill_datetime')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
