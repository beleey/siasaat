<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\MahasiswaRekomendasi */

$this->title = Yii::t('app', 'Create Mahasiswa Rekomendasi');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mahasiswa Rekomendasis'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-rekomendasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
