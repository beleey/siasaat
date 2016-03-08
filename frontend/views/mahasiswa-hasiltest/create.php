<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\MahasiswaHasiltest */

$this->title = Yii::t('app', 'Create Mahasiswa Hasiltest');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mahasiswa Hasiltests'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-hasiltest-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
