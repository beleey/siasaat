<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MahasiswaKeluarga */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mahasiswa-keluarga-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'nim')->textInput(['maxlength' => true, 'value' => $nim, 'readonly' => 'true']) ?>
            <?= $form->field($model, 'keluarga_nama')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'keluarga_hubungan')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'keluarga_tgl_lahir')->textInput() ?>    
            <?= $form->field($model, 'keluarga_hidup_status')->textInput() ?>
            <?= $form->field($model, 'keluarga_alamat')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'keluarga_telp_rumah')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'keluarga_telp_hp')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'keluarga_pekerjaan')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'keluarga_agama')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'keluarga_gereja')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
