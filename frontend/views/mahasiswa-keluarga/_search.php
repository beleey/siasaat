<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MahasiswaKeluargaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mahasiswa-keluarga-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'seq') ?>

    <?= $form->field($model, 'nim') ?>

    <?= $form->field($model, 'keluarga_nama') ?>

    <?= $form->field($model, 'keluarga_hubungan') ?>

    <?= $form->field($model, 'keluarga_tgl_lahir') ?>

    <?php // echo $form->field($model, 'keluarga_hidup_status') ?>

    <?php // echo $form->field($model, 'keluarga_alamat') ?>

    <?php // echo $form->field($model, 'keluarga_telp_rumah') ?>

    <?php // echo $form->field($model, 'keluarga_telp_hp') ?>

    <?php // echo $form->field($model, 'keluarga_pekerjaan') ?>

    <?php // echo $form->field($model, 'keluarga_agama') ?>

    <?php // echo $form->field($model, 'keluarga_gereja') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
