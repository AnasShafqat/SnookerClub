<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TableType */

$this->title = Yii::t('app', 'Update Table Type: ' . $model->tt_id, [
    'nameAttribute' => '' . $model->tt_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Table Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tt_id, 'url' => ['view', 'id' => $model->tt_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="table-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
