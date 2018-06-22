<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Table */

$this->title = Yii::t('app', 'Update Table: ' . $model->t_id, [
    'nameAttribute' => '' . $model->t_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tables'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->t_id, 'url' => ['view', 'id' => $model->t_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="table-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
