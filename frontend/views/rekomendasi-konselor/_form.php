<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MahasiswaRekomendasiKonselor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mahasiswa-rekomendasi-konselor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nim')->textInput(['maxlength' => true, 'value' => $nim, 'readonly' => 'true']) ?>

    <?= $form->field($model, 'rekomendasi')->widget(\yii\redactor\widgets\Redactor::className()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Tambah Catatan') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
