<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MahasiswaHasiltest */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mahasiswa-hasiltest-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-6">
    		<?= $form->field($model, 'nim')->textInput(['maxlength' => true, 'value' => $nim, 'readonly' => 'true']) ?>
		    <?= $form->field($model, 'nama_test')->dropDownList($model::getJenistes(),['prompt' => '--' . Yii::t('app', 'Pilih Jenis Test') . '--']); ?> 
		    <!--<?= $form->field($model, 'hasil')->textarea(['rows' => 6]) ?> -->
		       <?= $form->field($model, 'hasil')->widget(\yii\redactor\widgets\Redactor::className()) ?>
        </div>
    </div>
    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Tambah Hasil Test') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
