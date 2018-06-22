    <?php

    use yii\helpers\Html;
    use yii\widgets\ActiveForm;

    /* @var $this yii\web\View */
    /* @var $model backend\models\Game */
    /* @var $form yii\widgets\ActiveForm */
    ?>

    <div class="game-form">

        <?php $form = ActiveForm::begin(); ?>

        <!-- row 1 start here -->
            <div class="row">
                <div class="col-md-4">
                    <?= $form->field($model, 'gt_id')->textInput() ?>
                </div>
                <div class="col-md-4">
                    <?= $form->field($model, 'g_start_datetime')->textInput() ?>
                </div>
                <div class="col-md-4">
                  <?= $form->field($model, 'g_end_datetime')->textInput() ?>  
                </div>
            </div>
        <!-- row 1 close here -->

        <!-- row 2 start here -->
            <div class="row">
                <div class="col-md-4">
                    <?= $form->field($model, 'player1_name')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-4">
                   <?= $form->field($model, 'player2_name')->textInput() ?> 
                </div>
                <div class="col-md-4">
                     <?= $form->field($model, 'product_id')->textInput() ?>
                </div>
            </div>
        <!-- row 2 close here -->

        <!-- row 3 start here -->
            <div class="row">
                <div class="col-md-4">
                    <?= $form->field($model, 'product_qty')->textInput() ?>
                </div>
                <div class="col-md-4">
                   <?= $form->field($model, 'product_t_price')->textInput() ?> 
                </div>
                <div class="col-md-4">
                     <?= $form->field($model, 'created_at')->textInput() ?>
                </div>
            </div>
        <!-- row 3 close here -->

        <!-- row 4 start here -->
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
        <!-- row 4 close here -->

        <!-- row 5 start here -->
            <div class="row">
                <div class="col-md-4">
                   <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        </div>
                </div>
            </div>
        <!-- row 5 close here -->

        <?php ActiveForm::end(); ?>

    </div>
