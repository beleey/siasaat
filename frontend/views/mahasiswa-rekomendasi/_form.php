<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MahasiswaRekomendasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mahasiswa-rekomendasi-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'nim')->textInput(['maxlength' => true, 'value' => $nim, 'readonly' => 'true']) ?>
            <?= $form->field($model, 'rekomendasi_nama')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'rekomendasi_jabatan')->dropDownList($model::getJabatan(),['prompt' => '--' . Yii::t('app', 'Pilih Jabatan') . '--']); ?>
            <?= $form->field($model, 'rekomendasi_alamat')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'rekomendasi_kota')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'rekomendasi_kodepos')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'rekomendasi_telp_rumah')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'rekomendasi_telp_hp')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'rekomendasi_email')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="container-fluid">
            <?= $form->field($model, 'rekomendasi_isi')->textArea(['maxlength' => true, 'rows' => 6]) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Tambah Rekomendasi') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
