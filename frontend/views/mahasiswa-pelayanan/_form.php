<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MahasiswaPelayanan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mahasiswa-pelayanan-form">

    <?php $form = ActiveForm::begin(); ?>
     <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'nim')->textInput(['maxlength' => true, 'value' => $nim, 'readonly' => 'true']) ?>
            <?= $form->field($model, 'pelayanan_bidang')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'pelayanan_posisi')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'pelayanan_tahun_awal')->textInput() ?>
            <?= $form->field($model, 'pelayanan_tahun_akhir')->textInput() ?>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Tambah Pengalaman') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
