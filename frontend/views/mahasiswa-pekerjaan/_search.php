<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MahasiswaPekerjaanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mahasiswa-pekerjaan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'seq') ?>

    <?= $form->field($model, 'nim') ?>

    <?= $form->field($model, 'pekerjaan_tempat') ?>

    <?= $form->field($model, 'pekerjaan_jabatan') ?>

    <?= $form->field($model, 'pekerjaan_tahun_masuk') ?>

    <?php // echo $form->field($model, 'pekerjaan_tahun_keluar') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
