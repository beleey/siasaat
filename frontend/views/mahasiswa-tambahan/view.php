<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\MahasiswaTambahan */
//
//$this->title = $model->nim;
?>
<div class="mahasiswa-tambahan-view">


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nim',
            [
                'attribute' => 'tunangan_status',
                'value' => ((!$model->tunangan_status) ? Yii::t('app', '(not set)'): (($model->tunangan_status ==1)? Yii::t('app', 'Ya') : Yii::t('app', 'Tidak'))),
            ],
            'tunangan_nama',
            [
                'attribute' => 'bercerai_status',
                'value' => ((!$model->bercerai_status) ? Yii::t('app', '(not set)'): (($model->bercerai_status ==1)? Yii::t('app', 'Ya') : Yii::t('app', 'Tidak'))),
            ],
            'bercerai_alasan',
            'biaya_tanggung',
            [
                'attribute' => 'biaya_hutang_status',
                'value' => ((!$model->biaya_hutang_status) ? Yii::t('app', '(not set)'): (($model->biaya_hutang_status ==1)? Yii::t('app', 'Ya') : Yii::t('app', 'Tidak'))),
            ],
            'biaya_hutang_besar',
            'hukum_status',
            'hukum_penjelasan',
            'gangguan_jiwa',
            'gangguan_jiwa_keluarga',
            'terikat_kebiasaan',
            'terima_tuhan_waktu',
            'baptis_sidi_waktu',
            'baptis_sidi_pendeta',
            'baptis_sidi_gereja',
            'baca_alkitab_rindu_waktu',
            'baca_alkitab_jumlah',
            'ikut_aliran_sesat',
            'gereja_anggota_nama',
            'gereja_anggota_alamat',
            'gereja_anggota_kota',
            'gereja_anggota_kodepos',
            'gereja_anggota_telp',
            'gereja_anggota_email:email',
            'gereja_anggota_gembala',
            'gereja_ibadah_nama',
            'gereja_ibadah_alamat',
            'gereja_ibadah_kota',
            'gereja_ibadah_kodepos',
            'gereja_ibadah_gembala',
            'mengapa_saat:ntext',
            'rencana_setelah_tamat',
            [
                'attribute' => 'pernah_daftar_saat_status',
                'value' => ((!$model->pernah_daftar_saat_status) ? Yii::t('app', '(not set)'): (($model->pernah_daftar_saat_status ==1)? Yii::t('app', 'Ya') : Yii::t('app', 'Tidak'))),
            ],
            'pernah_daftar_saat_tahun',
            'seminari_lain_daftar_status',
            'seminari_lain_daftar_nama',
            'seminari_lain_daftar_tahun',
            'seminari_lain_skors',
            'minat',
            'pengalaman_hidup',
        ],
    ]) ?>
    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['mahasiswa/tambahan', 'id' => $nim], ['class' => 'btn btn-primary']) ?>
    </p>

</div>
