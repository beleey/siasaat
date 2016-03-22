<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\MahasiswaRohani */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Mahasiswa Rohani',
]) . ' ' . $model->seq;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mahasiswa Rohanis'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->seq, 'url' => ['view', 'id' => $model->seq]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="mahasiswa-rohani-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
