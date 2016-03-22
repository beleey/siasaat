<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mahasiswa_tambahan".
 *
 * @property integer $seq
 * @property string $nim
 * @property integer $tunangan_status
 * @property string $tunangan_nama
 * @property integer $bercerai_status
 * @property string $bercerai_alasan
 * @property string $biaya_tanggung
 * @property integer $biaya_hutang_status
 * @property integer $biaya_hutang_besar
 * @property integer $hukum_status
 * @property string $hukum_penjelasan
 * @property string $gangguan_jiwa
 * @property string $gangguan_jiwa_keluarga
 * @property string $terikat_kebiasaan
 * @property string $terima_tuhan_waktu
 * @property string $baptis_sidi_waktu
 * @property string $baptis_sidi_pendeta
 * @property string $baptis_sidi_gereja
 * @property string $baca_alkitab_rindu_waktu
 * @property integer $baca_alkitab_jumlah
 * @property string $ikut_aliran_sesat
 * @property string $gereja_anggota_nama
 * @property string $gereja_anggota_alamat
 * @property string $gereja_anggota_kota
 * @property string $gereja_anggota_kodepos
 * @property string $gereja_anggota_telp
 * @property string $gereja_anggota_email
 * @property string $gereja_anggota_gembala
 * @property string $gereja_ibadah_nama
 * @property string $gereja_ibadah_alamat
 * @property string $gereja_ibadah_kota
 * @property string $gereja_ibadah_kodepos
 * @property string $gereja_ibadah_gembala
 * @property string $mengapa_saat
 * @property string $rencana_setelah_tamat
 * @property integer $pernah_daftar_saat_status
 * @property integer $pernah_daftar_saat_tahun
 * @property integer $seminari_lain_daftar_status
 * @property string $seminari_lain_daftar_nama
 * @property integer $seminari_lain_daftar_tahun
 * @property string $seminari_lain_skors
 * @property integer $created_at
 * @property integer $user_id
 * @property string $minat
 * @property string $pengalaman_hidup
 *
 * @property Mahasiswa $nim0
 */
class MahasiswaTambahan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mahasiswa_tambahan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nim', 'biaya_tanggung', 'terima_tuhan_waktu', 'baptis_sidi_waktu', 'baptis_sidi_gereja'], 'required'],
            [['tunangan_status', 'bercerai_status', 'biaya_hutang_status', 'biaya_hutang_besar', 'hukum_status', 'baca_alkitab_jumlah', 'pernah_daftar_saat_status', 'pernah_daftar_saat_tahun', 'seminari_lain_daftar_status', 'seminari_lain_daftar_tahun', 'created_at', 'user_id'], 'integer'],
            [['terima_tuhan_waktu', 'baptis_sidi_waktu'], 'safe'],
            [['mengapa_saat','pengalaman_hidup'], 'string'],
            [['nim', 'gereja_anggota_email'], 'string', 'max' => 50],
            [['tunangan_nama', 'bercerai_alasan', 'hukum_penjelasan', 'gangguan_jiwa', 'gangguan_jiwa_keluarga', 'terikat_kebiasaan', 'baptis_sidi_gereja', 'baptis_sidi_pendeta', 'baca_alkitab_rindu_waktu', 'ikut_aliran_sesat', 'gereja_anggota_alamat', 'gereja_anggota_gembala', 'gereja_ibadah_alamat', 'gereja_ibadah_gembala', 'rencana_setelah_tamat', 'seminari_lain_skors', 'minat'], 'string', 'max' => 255],
            [['biaya_tanggung', 'gereja_anggota_nama', 'gereja_anggota_kota', 'gereja_ibadah_nama', 'gereja_ibadah_kota', 'seminari_lain_daftar_nama'], 'string', 'max' => 100],
            [['gereja_anggota_kodepos', 'gereja_anggota_telp', 'gereja_ibadah_kodepos'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'seq' => Yii::t('app', 'Seq'),
            'nim' => Yii::t('app', 'NIM'),
            'tunangan_status' => Yii::t('app', 'Sedang bertunangan'),
            'tunangan_nama' => Yii::t('app', 'Nama Tunangan'),
            'bercerai_status' => Yii::t('app', 'Pernah Bercerai'),
            'bercerai_alasan' => Yii::t('app', 'Alasan Bercerai'),
            'biaya_tanggung' => Yii::t('app', 'Yang Menanggung Biaya Belajar'),
            'biaya_hutang_status' => Yii::t('app', 'Punya Hutang'),
            'biaya_hutang_besar' => Yii::t('app', 'Besar Hutang'),
            'hukum_status' => Yii::t('app', 'Pernah Kasus Hukum'),
            'hukum_penjelasan' => Yii::t('app', 'Penjelasan Kasus Hukum'),
            'gangguan_jiwa' => Yii::t('app', 'Penah/Sedang Gangguan Jiwa'),
            'gangguan_jiwa_keluarga' => Yii::t('app', 'Keluarga Menderita Gangguan Jiwa'),
            'terikat_kebiasaan' => Yii::t('app', 'Terikat Kebiasaan'),
            'terima_tuhan_waktu' => Yii::t('app', 'Kapan Terima Tuhan'),
            'baptis_sidi_waktu' => Yii::t('app', 'Kapan Baptis/Sidi'),
            'baptis_sidi_pendeta' => Yii::t('app', 'Pendeta Baptis'),
            'baptis_sidi_gereja' => Yii::t('app', 'Gereja Tempat dibaptis'),
            'baca_alkitab_rindu_waktu' => Yii::t('app', 'Pertama kali Rindu Baca Alkitab'),
            'baca_alkitab_jumlah' => Yii::t('app', 'Jumlah Baca Alkitab'),
            'ikut_aliran_sesat' => Yii::t('app', 'Pernah Ikut Aliran Sesat'),
            'gereja_anggota_nama' => Yii::t('app', 'Nama Gereja Terdaftar'),
            'gereja_anggota_alamat' => Yii::t('app', 'Alamat Gereja Terdaftar'),
            'gereja_anggota_kota' => Yii::t('app', 'Kota Gereja Terdaftar'),
            'gereja_anggota_kodepos' => Yii::t('app', 'Kodepos Gereja Terdaftar'),
            'gereja_anggota_telp' => Yii::t('app', 'Telp Gereja Terdaftar'),
            'gereja_anggota_email' => Yii::t('app', 'Email Gereja Terdaftar'),
            'gereja_anggota_gembala' => Yii::t('app', 'Gembala Gereja Terdaftar'),
            'gereja_ibadah_nama' => Yii::t('app', 'Nama Gereja Tempat Beribadah'),
            'gereja_ibadah_alamat' => Yii::t('app', 'Alamat Gereja Tempat Beribadah'),
            'gereja_ibadah_kota' => Yii::t('app', 'Kota Gereja Tempat Beribadah'),
            'gereja_ibadah_kodepos' => Yii::t('app', 'Kodepos Gereja Tempat Beribadah'),
            'gereja_ibadah_gembala' => Yii::t('app', 'Gembala Gereja Tempat Beribadah'),
            'mengapa_saat' => Yii::t('app', 'Mengapa SAAT'),
            'rencana_setelah_tamat' => Yii::t('app', 'Rencana Setelah Tamat'),
            'pernah_daftar_saat_status' => Yii::t('app', 'Pernah Daftar SAAT'),
            'pernah_daftar_saat_tahun' => Yii::t('app', 'Tahun Pernah Daftar'),
            'seminari_lain_daftar_status' => Yii::t('app', 'Pernah Daftar Seminari Lain'),
            'seminari_lain_daftar_nama' => Yii::t('app', 'Nama Seminari Lain'),
            'seminari_lain_daftar_tahun' => Yii::t('app', 'Tahun Daftar Seminari Lain '),
            'seminari_lain_skors' => Yii::t('app', 'Pernah Skors Seminari Lain'),
            'minat' => Yii::t('app', 'Minat/Kegemaran '),
            'pengalaman_hidup' => Yii::t('app', 'Pengalaman Hidup'),
            'created_at' => Yii::t('app', 'Created At'),
            'user_id' => Yii::t('app', 'User ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNim0()
    {
        return $this->hasOne(Mahasiswa::className(), ['nim' => 'nim']);
    }

    /**
     * @inheritdoc
     * @return MahasiswaRekomendasiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MahasiswaTambahanQuery(get_called_class());
    }
}
