<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\MahasiswaTambahan */

$this->title = Yii::t('app', 'Create Mahasiswa Tambahan');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mahasiswa Tambahans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-tambahan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
