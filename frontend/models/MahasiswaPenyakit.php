<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mahasiswa_penyakit".
 *
 * @property integer $seq
 * @property string $nim
 * @property string $penyakit_nama
 * @property string $penyakit_keterangan
 * @property integer $penyakit_tahun
 *
 * @property Mahasiswa $nim0
 */
class MahasiswaPenyakit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mahasiswa_penyakit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nim', 'penyakit_nama', 'penyakit_keterangan', 'penyakit_tahun'], 'required'],
            [['penyakit_tahun'], 'integer'],
            [['nim'], 'string', 'max' => 50],
            [['penyakit_nama'], 'string', 'max' => 100],
            [['penyakit_keterangan'], 'string', 'max' => 255]
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
            'penyakit_nama' => Yii::t('app', 'Penyakit Nama'),
            'penyakit_keterangan' => Yii::t('app', 'Penyakit Keterangan'),
            'penyakit_tahun' => Yii::t('app', 'Penyakit Tahun'),
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
     * @return MahasiswaPenyakitQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MahasiswaPenyakitQuery(get_called_class());
    }
}
