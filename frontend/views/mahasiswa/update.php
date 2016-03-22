<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Mahasiswa */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Mahasiswa',
]) . ' ' . $model->nim;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mahasiswa'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama . " (" . $model->nim . ")", 'url' => ['view', 'id' => $model->nim]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="mahasiswa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
