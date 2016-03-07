<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\MahasiswaKeluarga */

$this->title = Yii::t('app', 'Create Mahasiswa Keluarga');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mahasiswa Keluargas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-keluarga-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
