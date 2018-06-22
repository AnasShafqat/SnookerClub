    <?php

    use yii\helpers\Html;
    use yii\widgets\ActiveForm;

    /* @var $this yii\web\View */
    /* @var $model backend\models\GameType */
    /* @var $form yii\widgets\ActiveForm */
    ?>

    <div class="game-type-form">

        <?php $form = ActiveForm::begin(); ?>

        <!-- row 1 start here -->
            <div class="row">
                <div class="col-md-4">
                   <?= $form->field($model, 'gt_name')->textInput(['maxlength' => true]) ?> 
                </div>
                <div class="col-md-4">
                   <?= $form->field($model, 'gt_description')->textInput(['maxlength' => true]) ?> 
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'created_at')->textInput() ?>
                </div>
            </div>
        <!-- row 1 close here -->

        <!-- row 2 start here -->
            <div class="row">
                <div class="col-md-4">
                    <?= $form->field($model, 'created_by')->textInput() ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'updated_at')->textInput() ?>
                </div>
                <div class="col-md-4">
                   <?= $form->field($model, 'updated_by')->textInput() ?> 
                </div>
            </div>
        <!-- row 2 close here -->

        <!-- row 3 strat here -->
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        </div>
                </div>
            </div>
        <!-- row 3 strat here -->
        
        <?php ActiveForm::end(); ?>

    </div>
