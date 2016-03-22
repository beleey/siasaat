<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mahasiswa_keluarga".
 *
 * @property integer $seq
 * @property string $nim
 * @property string $keluarga_nama
 * @property string $keluarga_hubungan
 * @property string $keluarga_tgl_lahir
 * @property integer $keluarga_hidup_status
 * @property string $keluarga_alamat
 * @property string $keluarga_telp_rumah
 * @property string $keluarga_telp_hp
 * @property string $keluarga_pekerjaan
 * @property string $keluarga_agama
 * @property string $keluarga_gereja
 * @property string $keluarga_keterangan
 *
 * @property Mahasiswa $nim0
 */
class MahasiswaKeluarga extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mahasiswa_keluarga';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nim', 'keluarga_nama', 'keluarga_hubungan'], 'required'],
            [['keluarga_tgl_lahir'], 'safe'],
            [['keluarga_hidup_status'], 'integer'],
            [['nim'], 'string', 'max' => 50],
            [['keluarga_nama', 'keluarga_alamat'], 'string', 'max' => 255],
            [['keluarga_hubungan', 'keluarga_pekerjaan'], 'string', 'max' => 100],
            [['keluarga_telp_rumah', 'keluarga_telp_hp', 'keluarga_agama', 'keluarga_gereja'], 'string', 'max' => 30],
            [['keluarga_keterangan'], 'string'],
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
            'keluarga_nama' => Yii::t('app', 'Nama'),
            'keluarga_hubungan' => Yii::t('app', 'Hubungan'),
            'keluarga_tgl_lahir' => Yii::t('app', 'Tgl Lahir'),
            'keluarga_hidup_status' => Yii::t('app', 'Status'),
            'keluarga_alamat' => Yii::t('app', 'Alamat'),
            'keluarga_telp_rumah' => Yii::t('app', 'Telp Rumah'),
            'keluarga_telp_hp' => Yii::t('app', 'Telp Hp'),
            'keluarga_pekerjaan' => Yii::t('app', 'Pekerjaan'),
            'keluarga_agama' => Yii::t('app', 'Agama'),
            'keluarga_gereja' => Yii::t('app', 'Gereja'),
            'keluarga_keterangan' => Yii::t('app', 'Keterangan'),
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
     * @return MahasiswaKeluargaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MahasiswaKeluargaQuery(get_called_class());
    }

    public static function getStatusKeluarga() 
    {
        return ['1' => Yii::t('app', 'Masih Hidup'), '2' => Yii::t('app', 'Sudah Meninggal')];
    }

    public static function getAgama() 
    {
        return [
            'kristen' => Yii::t('app', 'Kristen'),
            'katholik' => Yii::t('app', 'Katholik'),
            'islam' => Yii::t('app', 'Islam'),
            'hindu' => Yii::t('app', 'Hindu'),
            'budha' => Yii::t('app', 'Budha'),
            'kepercayaan' => Yii::t('app', 'Kepercayaan'),
            'atheis' => Yii::t('app', 'Atheis'),
            ];
    }

    public static function getHubungan() 
    {
        return [
            '1_ayah' => Yii::t('app', 'Ayah'),
            '2_ibu' => Yii::t('app', 'Ibu'),
            '3_suami' => Yii::t('app', 'Suami'),
            '4_istri' => Yii::t('app', 'Istri'),
            '5_anak' => Yii::t('app', 'Anak'),
            '6_kakak' => Yii::t('app', 'Kakak'),
            '7_adik' => Yii::t('app', 'Adik'),
            '8_lain' => Yii::t('app', 'Lainnya'),
            ];
    }
}
