<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\DatePicker;
/* @var $this yii\web\View */
/* @var $model frontend\models\MahasiswaTambahan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mahasiswa-tambahan-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'nim')->textInput(['maxlength' => true, 'value' => $nim, 'readonly' => 'true']) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <?= $form->field($model, 'tunangan_status')->checkbox() ?>
            <?= $form->field($model, 'tunangan_nama')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'bercerai_status')->checkbox() ?>
            <?= $form->field($model, 'bercerai_alasan')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'biaya_tanggung')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'biaya_hutang_status')->checkbox() ?>
            <?= $form->field($model, 'biaya_hutang_besar')->textInput() ?>
            <?= $form->field($model, 'hukum_status')->checkbox() ?>
            <?= $form->field($model, 'hukum_penjelasan')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'gangguan_jiwa')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'gangguan_jiwa_keluarga')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'terikat_kebiasaan')->textInput(['maxlength' => true]) ?>
            <?= 
                DatePicker::widget([
                    'model' => $model,
                    'attribute' => 'terima_tuhan_waktu',
                    'type' => DatePicker::TYPE_COMPONENT_APPEND,
                    'form' => $form,
                    'pluginOptions' => [
                        'format' => 'yyyy-mm-dd',
                        'autoclose' => true,
                    ]
                ]);
            ?>
            <?= 
                DatePicker::widget([
                    'model' => $model,
                    'attribute' => 'baptis_sidi_waktu',
                    'type' => DatePicker::TYPE_COMPONENT_APPEND,
                    'form' => $form,
                    'pluginOptions' => [
                        'format' => 'yyyy-mm-dd',
                        'autoclose' => true,
                    ]
                ]);
            ?>
            <?= $form->field($model, 'baptis_sidi_gereja')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'baca_alkitab_rindu_waktu')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'baca_alkitab_jumlah')->textInput() ?>
            <?= $form->field($model, 'ikut_aliran_sesat')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'gereja_anggota_nama')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'gereja_anggota_alamat')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'gereja_anggota_kota')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'gereja_anggota_kodepos')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'gereja_anggota_telp')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'gereja_anggota_email')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'gereja_anggota_gembala')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'gereja_ibadah_nama')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'gereja_ibadah_alamat')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'gereja_ibadah_kota')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'gereja_ibadah_kodepos')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'gereja_ibadah_gembala')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'mengapa_saat')->textarea(['rows' => 6]) ?>
            <?= $form->field($model, 'rencana_setelah_tamat')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'pernah_daftar_saat_status')->checkbox() ?>
            <?= $form->field($model, 'pernah_daftar_saat_tahun')->textInput() ?>
            <?= $form->field($model, 'seminari_lain_daftar_status')->textInput() ?>
            <?= $form->field($model, 'seminari_lain_daftar_nama')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'seminari_lain_daftar_tahun')->textInput() ?>
            <?= $form->field($model, 'seminari_lain_skors')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'minat')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'pengalaman_hidup')->textarea(['rows' => 6]) ?>
         </div>
         <div class="col-md-6">
            


         </div>
    </div>
    <div class="row" style="margin-top:30px;">
        <div class="col-md-6">
             
        </div>
        <div class="col-md-6">

        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            
        </div>
        <div class="col-md-6">
            
        </div>
    </div>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Lengkapi Data') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
