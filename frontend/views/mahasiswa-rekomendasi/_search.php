<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MahasiswaRekomendasiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mahasiswa-rekomendasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'seq') ?>

    <?= $form->field($model, 'nim') ?>

    <?= $form->field($model, 'rekomendasi_nama') ?>

    <?= $form->field($model, 'rekomendasi_jabatan') ?>

    <?= $form->field($model, 'rekomendasi_alamat') ?>

    <?php // echo $form->field($model, 'rekomendasi_kota') ?>

    <?php // echo $form->field($model, 'rekomendasi_kodepos') ?>

    <?php // echo $form->field($model, 'rekomendasi_telp_rumah') ?>

    <?php // echo $form->field($model, 'rekomendasi_telp_hp') ?>

    <?php // echo $form->field($model, 'rekomendasi_email') ?>

    <?php // echo $form->field($model, 'rekomendasi_isi') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
