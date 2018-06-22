<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Game */

$this->title = Yii::t('app', 'Update Game: ' . $model->g_id, [
    'nameAttribute' => '' . $model->g_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Games'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->g_id, 'url' => ['view', 'id' => $model->g_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="game-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
