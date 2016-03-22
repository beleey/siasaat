<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mahasiswa_rekomendasi".
 *
 * @property integer $seq
 * @property string $nim
 * @property string $rekomendasi_nama
 * @property string $rekomendasi_jabatan
 * @property string $rekomendasi_alamat
 * @property string $rekomendasi_kota
 * @property string $rekomendasi_kodepos
 * @property string $rekomendasi_telp_rumah
 * @property string $rekomendasi_telp_hp
 * @property string $rekomendasi_email
  * @property string $rekomendasi_isi
 *
 * @property Mahasiswa $nim0
 */
class MahasiswaRekomendasi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mahasiswa_rekomendasi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nim', 'rekomendasi_nama', 'rekomendasi_jabatan', 'rekomendasi_isi'], 'required'],
            [['nim', 'rekomendasi_email'], 'string', 'max' => 50],
            [['rekomendasi_isi'], 'string'],
            [['rekomendasi_nama', 'rekomendasi_alamat'], 'string', 'max' => 255],
            [['rekomendasi_jabatan', 'rekomendasi_kota'], 'string', 'max' => 100],
            [['rekomendasi_kodepos'], 'string', 'max' => 20],
            [['rekomendasi_telp_rumah', 'rekomendasi_telp_hp'], 'string', 'max' => 30]
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
            'rekomendasi_nama' => Yii::t('app', 'Nama Rekomendator'),
            'rekomendasi_jabatan' => Yii::t('app', 'Jabatan Rekomendator'),
            'rekomendasi_alamat' => Yii::t('app', 'Alamat'),
            'rekomendasi_kota' => Yii::t('app', 'Kota'),
            'rekomendasi_kodepos' => Yii::t('app', 'Kode Pos'),
            'rekomendasi_telp_rumah' => Yii::t('app', 'Telp Rumah'),
            'rekomendasi_telp_hp' => Yii::t('app', 'Telp Hp'),
            'rekomendasi_email' => Yii::t('app', 'Email'),
            'rekomendasi_rekomendasi' => Yii::t('app', 'Isi Rekomendasi'),
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
        return new MahasiswaRekomendasiQuery(get_called_class());
    }

    public static function getJabatan() 
    {
        return [
            '1_rohaniwan' => Yii::t('app', 'Rohaniwan'),
            '2_majelis' => Yii::t('app', 'Majelis/Pembimbing'),
            '3_rekan' => Yii::t('app', 'Rekan Pelayanan'),
            ];
    }
}
