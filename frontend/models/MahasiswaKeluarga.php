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
            [['nim', 'keluarga_nama', 'keluarga_hubungan', 'keluarga_tgl_lahir', 'keluarga_hidup_status', 'keluarga_alamat', 'keluarga_telp_rumah', 'keluarga_telp_hp', 'keluarga_pekerjaan', 'keluarga_agama', 'keluarga_gereja'], 'required'],
            [['keluarga_tgl_lahir'], 'safe'],
            [['keluarga_hidup_status'], 'integer'],
            [['nim'], 'string', 'max' => 50],
            [['keluarga_nama', 'keluarga_alamat'], 'string', 'max' => 255],
            [['keluarga_hubungan', 'keluarga_pekerjaan'], 'string', 'max' => 100],
            [['keluarga_telp_rumah', 'keluarga_telp_hp', 'keluarga_agama', 'keluarga_gereja'], 'string', 'max' => 30]
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
            'keluarga_nama' => Yii::t('app', 'Keluarga Nama'),
            'keluarga_hubungan' => Yii::t('app', 'Keluarga Hubungan'),
            'keluarga_tgl_lahir' => Yii::t('app', 'Keluarga Tgl Lahir'),
            'keluarga_hidup_status' => Yii::t('app', 'Keluarga Hidup Status'),
            'keluarga_alamat' => Yii::t('app', 'Keluarga Alamat'),
            'keluarga_telp_rumah' => Yii::t('app', 'Keluarga Telp Rumah'),
            'keluarga_telp_hp' => Yii::t('app', 'Keluarga Telp Hp'),
            'keluarga_pekerjaan' => Yii::t('app', 'Keluarga Pekerjaan'),
            'keluarga_agama' => Yii::t('app', 'Keluarga Agama'),
            'keluarga_gereja' => Yii::t('app', 'Keluarga Gereja'),
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
}
