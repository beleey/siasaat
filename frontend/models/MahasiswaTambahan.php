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
 * @property integer $menikah_status
 * @property string $menikah_pasangan_nama
 * @property string $menikah_pasangan_tgllahir
 * @property string $menikah_pasangan_alamat
 * @property string $menikah_pasangan_telp_rumah
 * @property string $menikah_pasangan_telp_hp
 * @property string $menikah_pasangan_pekerjaan
 * @property string $menikah_pasangan_agama
 * @property string $menikah_pasangan_gereja
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
            [['nim', 'tunangan_status', 'tunangan_nama', 'menikah_status', 'menikah_pasangan_nama', 'menikah_pasangan_tgllahir', 'menikah_pasangan_alamat', 'menikah_pasangan_telp_rumah', 'menikah_pasangan_telp_hp', 'menikah_pasangan_pekerjaan', 'menikah_pasangan_agama', 'menikah_pasangan_gereja', 'bercerai_status', 'bercerai_alasan', 'biaya_tanggung', 'biaya_hutang_status', 'biaya_hutang_besar', 'hukum_status', 'hukum_penjelasan', 'gangguan_jiwa', 'gangguan_jiwa_keluarga', 'terikat_kebiasaan', 'terima_tuhan_waktu', 'baptis_sidi_waktu', 'baptis_sidi_gereja', 'baca_alkitab_rindu_waktu', 'baca_alkitab_jumlah', 'ikut_aliran_sesat', 'gereja_anggota_nama', 'gereja_anggota_alamat', 'gereja_anggota_kota', 'gereja_anggota_kodepos', 'gereja_anggota_telp', 'gereja_anggota_email', 'gereja_anggota_gembala', 'gereja_ibadah_nama', 'gereja_ibadah_alamat', 'gereja_ibadah_kota', 'gereja_ibadah_kodepos', 'gereja_ibadah_gembala', 'mengapa_saat', 'rencana_setelah_tamat', 'pernah_daftar_saat_status', 'pernah_daftar_saat_tahun', 'seminari_lain_daftar_status', 'seminari_lain_daftar_nama', 'seminari_lain_daftar_tahun', 'seminari_lain_skors'], 'required'],
            [['tunangan_status', 'menikah_status', 'bercerai_status', 'biaya_hutang_status', 'biaya_hutang_besar', 'hukum_status', 'baca_alkitab_jumlah', 'pernah_daftar_saat_status', 'pernah_daftar_saat_tahun', 'seminari_lain_daftar_status', 'seminari_lain_daftar_tahun'], 'integer'],
            [['menikah_pasangan_tgllahir', 'terima_tuhan_waktu', 'baptis_sidi_waktu'], 'safe'],
            [['mengapa_saat'], 'string'],
            [['nim', 'gereja_anggota_email'], 'string', 'max' => 50],
            [['tunangan_nama', 'menikah_pasangan_nama', 'menikah_pasangan_alamat', 'menikah_pasangan_pekerjaan', 'bercerai_alasan', 'hukum_penjelasan', 'gangguan_jiwa', 'gangguan_jiwa_keluarga', 'terikat_kebiasaan', 'baptis_sidi_gereja', 'baca_alkitab_rindu_waktu', 'ikut_aliran_sesat', 'gereja_anggota_alamat', 'gereja_anggota_gembala', 'gereja_ibadah_alamat', 'gereja_ibadah_gembala', 'rencana_setelah_tamat', 'seminari_lain_skors'], 'string', 'max' => 255],
            [['menikah_pasangan_telp_rumah', 'menikah_pasangan_telp_hp', 'menikah_pasangan_agama', 'menikah_pasangan_gereja', 'gereja_anggota_kodepos', 'gereja_anggota_telp', 'gereja_ibadah_kodepos'], 'string', 'max' => 30],
            [['biaya_tanggung', 'gereja_anggota_nama', 'gereja_anggota_kota', 'gereja_ibadah_nama', 'gereja_ibadah_kota', 'seminari_lain_daftar_nama'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'seq' => Yii::t('app', 'Seq'),
            'nim' => Yii::t('app', 'Nim'),
            'tunangan_status' => Yii::t('app', 'Tunangan Status'),
            'tunangan_nama' => Yii::t('app', 'Tunangan Nama'),
            'menikah_status' => Yii::t('app', 'Menikah Status'),
            'menikah_pasangan_nama' => Yii::t('app', 'Menikah Pasangan Nama'),
            'menikah_pasangan_tgllahir' => Yii::t('app', 'Menikah Pasangan Tgllahir'),
            'menikah_pasangan_alamat' => Yii::t('app', 'Menikah Pasangan Alamat'),
            'menikah_pasangan_telp_rumah' => Yii::t('app', 'Menikah Pasangan Telp Rumah'),
            'menikah_pasangan_telp_hp' => Yii::t('app', 'Menikah Pasangan Telp Hp'),
            'menikah_pasangan_pekerjaan' => Yii::t('app', 'Menikah Pasangan Pekerjaan'),
            'menikah_pasangan_agama' => Yii::t('app', 'Menikah Pasangan Agama'),
            'menikah_pasangan_gereja' => Yii::t('app', 'Menikah Pasangan Gereja'),
            'bercerai_status' => Yii::t('app', 'Bercerai Status'),
            'bercerai_alasan' => Yii::t('app', 'Bercerai Alasan'),
            'biaya_tanggung' => Yii::t('app', 'Biaya Tanggung'),
            'biaya_hutang_status' => Yii::t('app', 'Biaya Hutang Status'),
            'biaya_hutang_besar' => Yii::t('app', 'Biaya Hutang Besar'),
            'hukum_status' => Yii::t('app', 'Hukum Status'),
            'hukum_penjelasan' => Yii::t('app', 'Hukum Penjelasan'),
            'gangguan_jiwa' => Yii::t('app', 'Gangguan Jiwa'),
            'gangguan_jiwa_keluarga' => Yii::t('app', 'Gangguan Jiwa Keluarga'),
            'terikat_kebiasaan' => Yii::t('app', 'Terikat Kebiasaan'),
            'terima_tuhan_waktu' => Yii::t('app', 'Terima Tuhan Waktu'),
            'baptis_sidi_waktu' => Yii::t('app', 'Baptis Sidi Waktu'),
            'baptis_sidi_gereja' => Yii::t('app', 'Baptis Sidi Gereja'),
            'baca_alkitab_rindu_waktu' => Yii::t('app', 'Baca Alkitab Rindu Waktu'),
            'baca_alkitab_jumlah' => Yii::t('app', 'Baca Alkitab Jumlah'),
            'ikut_aliran_sesat' => Yii::t('app', 'Ikut Aliran Sesat'),
            'gereja_anggota_nama' => Yii::t('app', 'Gereja Anggota Nama'),
            'gereja_anggota_alamat' => Yii::t('app', 'Gereja Anggota Alamat'),
            'gereja_anggota_kota' => Yii::t('app', 'Gereja Anggota Kota'),
            'gereja_anggota_kodepos' => Yii::t('app', 'Gereja Anggota Kodepos'),
            'gereja_anggota_telp' => Yii::t('app', 'Gereja Anggota Telp'),
            'gereja_anggota_email' => Yii::t('app', 'Gereja Anggota Email'),
            'gereja_anggota_gembala' => Yii::t('app', 'Gereja Anggota Gembala'),
            'gereja_ibadah_nama' => Yii::t('app', 'Gereja Ibadah Nama'),
            'gereja_ibadah_alamat' => Yii::t('app', 'Gereja Ibadah Alamat'),
            'gereja_ibadah_kota' => Yii::t('app', 'Gereja Ibadah Kota'),
            'gereja_ibadah_kodepos' => Yii::t('app', 'Gereja Ibadah Kodepos'),
            'gereja_ibadah_gembala' => Yii::t('app', 'Gereja Ibadah Gembala'),
            'mengapa_saat' => Yii::t('app', 'Mengapa Saat'),
            'rencana_setelah_tamat' => Yii::t('app', 'Rencana Setelah Tamat'),
            'pernah_daftar_saat_status' => Yii::t('app', 'Pernah Daftar Saat Status'),
            'pernah_daftar_saat_tahun' => Yii::t('app', 'Pernah Daftar Saat Tahun'),
            'seminari_lain_daftar_status' => Yii::t('app', 'Seminari Lain Daftar Status'),
            'seminari_lain_daftar_nama' => Yii::t('app', 'Seminari Lain Daftar Nama'),
            'seminari_lain_daftar_tahun' => Yii::t('app', 'Seminari Lain Daftar Tahun'),
            'seminari_lain_skors' => Yii::t('app', 'Seminari Lain Skors'),
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
     * @return MahasiswaTambahanQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MahasiswaTambahanQuery(get_called_class());
    }
}
