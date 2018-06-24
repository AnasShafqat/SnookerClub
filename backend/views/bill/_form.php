    <?php

    use yii\helpers\Html;
    use yii\widgets\ActiveForm;

    // datetime widget...

    use dosamigos\datetimepicker\DateTimePicker;

    /* @var $this yii\web\View */
    /* @var $model backend\models\Bill */
    /* @var $form yii\widgets\ActiveForm */
    ?>

    <div class="bill-form">

        <?php $form = ActiveForm::begin(); ?>

        <!-- row 1 start here -->
            <div class="row">
                <div class="col-md-4">
                    <?= $form->field($model, 'player_id')->textInput() ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'table_id')->textInput() ?>
                </div>
                <div class="col-md-4">
                   <label>Bill Date</label>
                   <?= DateTimePicker::widget([
    'model' => $model,
    'attribute' => 'bill_datetime',
    'language' => 'en',
    'size' => 'ms',
    'clientOptions' => [
        'autoclose' => true,
        'format' => 'yyyy-mm-dd HH:ii:ss',
        'todayBtn' => true
    ]
]);?>
 
                </div>
            </div>
        <!-- row 1 close here -->

        <!-- row 2 start here -->
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
        <!-- row 2 close here -->

        <!-- row 3 start here -->
            <div class="row">
                <div class="col-md-4">
                   <?= $form->field($model, 'updated_by')->textInput() ?> 
                </div>
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4">
                    
                </div>
            </div>
        <!-- row 3 close here -->

        <!-- row 4 start here -->
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        </div>
                </div>
            </div>
        <!-- row 4 close here -->

        <?php ActiveForm::end(); ?>

    </div>
