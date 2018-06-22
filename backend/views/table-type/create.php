<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TableType */

$this->title = Yii::t('app', 'Create Table Type');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Table Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="table-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
