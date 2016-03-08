<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MahasiswaPenyakit */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mahasiswa-penyakit-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-6">
    		<?= $form->field($model, 'nim')->textInput(['maxlength' => true, 'value' => $nim, 'readonly' => 'true']) ?>
		    <?= $form->field($model, 'penyakit_nama')->textInput(['maxlength' => true]) ?>    
        </div>
        <div class="col-md-6">
       	    <?= $form->field($model, 'penyakit_keterangan')->textInput(['maxlength' => true]) ?>
		    <?= $form->field($model, 'penyakit_tahun')->textInput() ?>
		</div>
    </div>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Tambah') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
