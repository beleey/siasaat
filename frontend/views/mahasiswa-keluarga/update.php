<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\MahasiswaKeluarga */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Mahasiswa Keluarga',
]) . ' ' . $model->seq;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mahasiswa Keluargas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->seq, 'url' => ['view', 'id' => $model->seq]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="mahasiswa-keluarga-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
