    <?php

    use yii\helpers\Html;
    use yii\widgets\ActiveForm;

    /* @var $this yii\web\View */
    /* @var $model backend\models\Bill */
    /* @var $form yii\widgets\ActiveForm */
    ?>

    <div class="bill-form">

        <?php $form = ActiveForm::begin(); ?>

        <div class="row">
            <div class="col-md-4">
                 <?= $form->field($model, 'player_id')->textInput() ?>
            </div>
                 
            <div class="col-md-4">
                 <?= $form->field($model, 'table_id')->textInput() ?>
            </div>

            <div class="col-md-4">
                <?= $form->field($model, 'bill_datetime')->widget(\yii\jui\DatePicker::className(), \omnilight\datetime\DatePickerConfig::get($model, 'bill_datetime')) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                 <?= $form->field($model, 'created_at')->textInput() ?>
            </div>
                 
            <div class="col-md-4">
                 <?= $form->field($model, 'created_by')->textInput() ?>
            </div>
                
            <div class="col-md-4">
                 <?= $form->field($model, 'updated_at')->textInput() ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                  <?= $form->field($model, 'updated_by')->textInput() ?>
            </div>
                 
            <div class="col-md-4">
                 
            </div>
                
            <div class="col-md-4">
                 
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
            </div>
            </div>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
