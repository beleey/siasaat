<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MahasiswaTambahanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mahasiswa-tambahan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'seq') ?>

    <?= $form->field($model, 'nim') ?>

    <?= $form->field($model, 'tunangan_status') ?>

    <?= $form->field($model, 'tunangan_nama') ?>

    <?= $form->field($model, 'bercerai_status') ?>

    <?php // echo $form->field($model, 'bercerai_alasan') ?>

    <?php // echo $form->field($model, 'biaya_tanggung') ?>

    <?php // echo $form->field($model, 'biaya_hutang_status') ?>

    <?php // echo $form->field($model, 'biaya_hutang_besar') ?>

    <?php // echo $form->field($model, 'hukum_status') ?>

    <?php // echo $form->field($model, 'hukum_penjelasan') ?>

    <?php // echo $form->field($model, 'gangguan_jiwa') ?>

    <?php // echo $form->field($model, 'gangguan_jiwa_keluarga') ?>

    <?php // echo $form->field($model, 'terikat_kebiasaan') ?>

    <?php // echo $form->field($model, 'terima_tuhan_waktu') ?>

    <?php // echo $form->field($model, 'baptis_sidi_waktu') ?>

    <?php // echo $form->field($model, 'baptis_sidi_pendeta') ?>

    <?php // echo $form->field($model, 'baptis_sidi_gereja') ?>

    <?php // echo $form->field($model, 'baca_alkitab_rindu_waktu') ?>

    <?php // echo $form->field($model, 'baca_alkitab_jumlah') ?>

    <?php // echo $form->field($model, 'ikut_aliran_sesat') ?>

    <?php // echo $form->field($model, 'gereja_anggota_nama') ?>

    <?php // echo $form->field($model, 'gereja_anggota_alamat') ?>

    <?php // echo $form->field($model, 'gereja_anggota_kota') ?>

    <?php // echo $form->field($model, 'gereja_anggota_kodepos') ?>

    <?php // echo $form->field($model, 'gereja_anggota_telp') ?>

    <?php // echo $form->field($model, 'gereja_anggota_email') ?>

    <?php // echo $form->field($model, 'gereja_anggota_gembala') ?>

    <?php // echo $form->field($model, 'gereja_ibadah_nama') ?>

    <?php // echo $form->field($model, 'gereja_ibadah_alamat') ?>

    <?php // echo $form->field($model, 'gereja_ibadah_kota') ?>

    <?php // echo $form->field($model, 'gereja_ibadah_kodepos') ?>

    <?php // echo $form->field($model, 'gereja_ibadah_gembala') ?>

    <?php // echo $form->field($model, 'mengapa_saat') ?>

    <?php // echo $form->field($model, 'rencana_setelah_tamat') ?>

    <?php // echo $form->field($model, 'pernah_daftar_saat_status') ?>

    <?php // echo $form->field($model, 'pernah_daftar_saat_tahun') ?>

    <?php // echo $form->field($model, 'seminari_lain_daftar_status') ?>

    <?php // echo $form->field($model, 'seminari_lain_daftar_nama') ?>

    <?php // echo $form->field($model, 'seminari_lain_daftar_tahun') ?>

    <?php // echo $form->field($model, 'seminari_lain_skors') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'minat') ?>

    <?php // echo $form->field($model, 'pengalaman_hidup') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
