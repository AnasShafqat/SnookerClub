<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\GameType */

$this->title = Yii::t('app', 'Update Game Type: ' . $model->gt_id, [
    'nameAttribute' => '' . $model->gt_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Game Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->gt_id, 'url' => ['view', 'id' => $model->gt_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="game-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
