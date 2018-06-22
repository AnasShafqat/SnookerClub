<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Player */

$this->title = Yii::t('app', 'Update Player: ' . $model->p_id, [
    'nameAttribute' => '' . $model->p_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Players'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->p_id, 'url' => ['view', 'id' => $model->p_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="player-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
