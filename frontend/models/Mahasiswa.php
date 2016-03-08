<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property string $nim
 * @property string $nama
 * @property string $panggilan
 * @property string $gender
 * @property string $tempat_lahir
 * @property string $tgl_lahir
 * @property string $gol_darah
 * @property string $alamat
 * @property string $kota
 * @property string $kode_pos
 * @property string $telp_rumah
 * @property string $telp_hp
 * @property string $email
 * @property string $bangsa
 * @property integer $tahun_angkatan
 * @property string $create_date
 *
 * @property MahasiswaKeluarga[] $mahasiswaKeluargas
 * @property MahasiswaPekerjaan[] $mahasiswaPekerjaans
 * @property MahasiswaPelayanan[] $mahasiswaPelayanans
 * @property MahasiswaPendidikan[] $mahasiswaPendidikans
 * @property MahasiswaPenyakit[] $mahasiswaPenyakits
 * @property MahasiswaRekomendasi[] $mahasiswaRekomendasis
 * @property MahasiswaTambahan[] $mahasiswaTambahans
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'panggilan', 'gender', 'tempat_lahir', 'tgl_lahir', 'gol_darah', 'alamat', 'kota', 'kode_pos', 'telp_rumah', 'telp_hp', 'email', 'bangsa', 'tahun_angkatan', 'create_date'], 'required'],
            [['tgl_lahir', 'create_date'], 'safe'],
            [['tahun_angkatan'], 'integer'],
            [['nim'], 'string', 'max' => 50],
            [['nama', 'alamat'], 'string', 'max' => 255],
            [['panggilan', 'tempat_lahir', 'kota', 'kode_pos', 'email', 'bangsa'], 'string', 'max' => 100],
            [['gender'], 'string', 'max' => 20],
            [['gol_darah'], 'string', 'max' => 10],
            [['telp_rumah', 'telp_hp'], 'string', 'max' => 30],
            [['image_file'], 'file', 'skipOnEmpty' => true, 'extensions' => 'jpg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nim' => Yii::t('app', 'NIM'),
            'nama' => Yii::t('app', 'Nama'),
            'panggilan' => Yii::t('app', 'Panggilan'),
            'gender' => Yii::t('app', 'Gender'),
            'tempat_lahir' => Yii::t('app', 'Tempat Lahir'),
            'tgl_lahir' => Yii::t('app', 'Tgl Lahir'),
            'gol_darah' => Yii::t('app', 'Gol Darah'),
            'alamat' => Yii::t('app', 'Alamat'),
            'kota' => Yii::t('app', 'Kota'),
            'kode_pos' => Yii::t('app', 'Kode Pos'),
            'telp_rumah' => Yii::t('app', 'Telp Rumah'),
            'telp_hp' => Yii::t('app', 'Telp Hp'),
            'email' => Yii::t('app', 'Email'),
            'bangsa' => Yii::t('app', 'Bangsa'),
            'tahun_angkatan' => Yii::t('app', 'Tahun Angkatan'),
            'create_date' => Yii::t('app', 'Create Date'),
            'image_file' => Yii::t('app', 'Foto'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMahasiswaKeluargas()
    {
        return $this->hasMany(MahasiswaKeluarga::className(), ['nim' => 'nim']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMahasiswaPekerjaans()
    {
        return $this->hasMany(MahasiswaPekerjaan::className(), ['nim' => 'nim']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMahasiswaPelayanans()
    {
        return $this->hasMany(MahasiswaPelayanan::className(), ['nim' => 'nim']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMahasiswaPendidikans()
    {
        return $this->hasMany(MahasiswaPendidikan::className(), ['nim' => 'nim']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMahasiswaPenyakits()
    {
        return $this->hasMany(MahasiswaPenyakit::className(), ['nim' => 'nim']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMahasiswaRekomendasis()
    {
        return $this->hasMany(MahasiswaRekomendasi::className(), ['nim' => 'nim']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMahasiswaTambahans()
    {
        return $this->hasMany(MahasiswaTambahan::className(), ['nim' => 'nim']);
    }
}
