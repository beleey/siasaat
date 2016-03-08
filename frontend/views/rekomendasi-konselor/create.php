<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\MahasiswaRekomendasiKonselor */

$this->title = Yii::t('app', 'Create Mahasiswa Rekomendasi Konselor');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mahasiswa Rekomendasi Konselors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-rekomendasi-konselor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
