<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MahasiswaTambahanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Mahasiswa Tambahans');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahasiswa-tambahan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Mahasiswa Tambahan'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'seq',
            'nim',
            'tunangan_status',
            'tunangan_nama',
            'bercerai_status',
            // 'bercerai_alasan',
            // 'biaya_tanggung',
            // 'biaya_hutang_status',
            // 'biaya_hutang_besar',
            // 'hukum_status',
            // 'hukum_penjelasan',
            // 'gangguan_jiwa',
            // 'gangguan_jiwa_keluarga',
            // 'terikat_kebiasaan',
            // 'terima_tuhan_waktu',
            // 'baptis_sidi_waktu',
            // 'baptis_sidi_pendeta',
            // 'baptis_sidi_gereja',
            // 'baca_alkitab_rindu_waktu',
            // 'baca_alkitab_jumlah',
            // 'ikut_aliran_sesat',
            // 'gereja_anggota_nama',
            // 'gereja_anggota_alamat',
            // 'gereja_anggota_kota',
            // 'gereja_anggota_kodepos',
            // 'gereja_anggota_telp',
            // 'gereja_anggota_email:email',
            // 'gereja_anggota_gembala',
            // 'gereja_ibadah_nama',
            // 'gereja_ibadah_alamat',
            // 'gereja_ibadah_kota',
            // 'gereja_ibadah_kodepos',
            // 'gereja_ibadah_gembala',
            // 'mengapa_saat:ntext',
            // 'rencana_setelah_tamat',
            // 'pernah_daftar_saat_status',
            // 'pernah_daftar_saat_tahun',
            // 'seminari_lain_daftar_status',
            // 'seminari_lain_daftar_nama',
            // 'seminari_lain_daftar_tahun',
            // 'seminari_lain_skors',
            // 'created_at',
            // 'user_id',
            // 'minat',
            // 'pengalaman_hidup:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
