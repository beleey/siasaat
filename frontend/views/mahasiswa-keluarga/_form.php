<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\DatePicker;

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
             <?= $form->field($model, 'keluarga_hubungan')->dropDownList($model::getHubungan(),['prompt' => '--' . Yii::t('app', 'Pilih Hubungan') . '--']); ?>
           <?= 
                DatePicker::widget([
                    'model' => $model,
                    'attribute' => 'keluarga_tgl_lahir',
                    'type' => DatePicker::TYPE_COMPONENT_APPEND,
                    'form' => $form,
                    'pluginOptions' => [
                        'format' => 'yyyy-mm-dd',
                        'autoclose' => true,
                    ]
                ]);
            ?>   
            <?= $form->field($model, 'keluarga_hidup_status')->dropDownList($model::getStatusKeluarga(),['prompt' => '--' . Yii::t('app', 'Pilih Status') . '--']); ?>
            <?= $form->field($model, 'keluarga_alamat')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'keluarga_telp_rumah')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'keluarga_telp_hp')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'keluarga_pekerjaan')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'keluarga_agama')->dropDownList($model::getAgama(),['prompt' => '--' . Yii::t('app', 'Pilih Agama') . '--']); ?>
            <?= $form->field($model, 'keluarga_gereja')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'keluarga_keterangan')->textArea(['rows' => '6']) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Tambah') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
