<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mahasiswa_pekerjaan".
 *
 * @property integer $seq
 * @property string $nim
 * @property string $pekerjaan_tempat
 * @property string $pekerjaan_jabatan
 * @property integer $pekerjaan_tahun_masuk
 * @property integer $pekerjaan_tahun_keluar
 *
 * @property Mahasiswa $nim0
 */
class MahasiswaPekerjaan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mahasiswa_pekerjaan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nim', 'pekerjaan_tempat'], 'required'],
            [['pekerjaan_tahun_masuk', 'pekerjaan_tahun_keluar'], 'integer'],
            [['nim'], 'string', 'max' => 50],
            [['pekerjaan_tempat'], 'string', 'max' => 255],
            [['pekerjaan_jabatan'], 'string', 'max' => 100]
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
            'pekerjaan_tempat' => Yii::t('app', 'Tempat Kerja'),
            'pekerjaan_jabatan' => Yii::t('app', 'Jabatan'),
            'pekerjaan_tahun_masuk' => Yii::t('app', 'Tahun Masuk'),
            'pekerjaan_tahun_keluar' => Yii::t('app', 'Tahun Keluar'),
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
     * @return MahasiswaPekerjaanQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MahasiswaPekerjaanQuery(get_called_class());
    }
}
