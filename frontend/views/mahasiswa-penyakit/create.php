<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\MahasiswaPenyakit */

$this->title = Yii::t('app', 'Create Mahasiswa Penyakit');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mahasiswa Penyakits'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-penyakit-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
