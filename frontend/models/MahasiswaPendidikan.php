<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mahasiswa_pendidikan".
 *
 * @property integer $seq
 * @property string $nim
 * @property string $pendidikan_tingkat
 * @property string $pendidikan_nama
 * @property integer $pendidikan_tahun_masuk
 * @property integer $pendidikan_tahun_lulus
 * @property string $pendidikan_gelar
 * @property string $pendidikan_kota
 *
 * @property Mahasiswa $nim0
 */
class MahasiswaPendidikan extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mahasiswa_pendidikan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nim', 'pendidikan_tingkat', 'pendidikan_nama'], 'required'],
            [['pendidikan_tahun_masuk', 'pendidikan_tahun_lulus'], 'integer'],
            [['nim', 'pendidikan_gelar', 'pendidikan_kota'], 'string', 'max' => 50],
            [['pendidikan_tingkat'], 'string', 'max' => 100],
            [['pendidikan_nama'], 'string', 'max' => 255]
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
            'pendidikan_tingkat' => Yii::t('app', 'Tingkat Pendidikan'),
            'pendidikan_nama' => Yii::t('app', 'Nama Institusi'),
            'pendidikan_tahun_masuk' => Yii::t('app', 'Tahun Masuk'),
            'pendidikan_tahun_lulus' => Yii::t('app', 'Tahun Lulus'),
            'pendidikan_gelar' => Yii::t('app', 'Gelar'),
            'pendidikan_kota' => Yii::t('app', 'Kota'),
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
     * @return MahasiswaPendidikanQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MahasiswaPendidikanQuery(get_called_class());
    }

    public static function getTingkatPendidikan() 
    {
        return ['Tingkat Dasar' => Yii::t('app', 'Tingkat Dasar'), 'Tingkat Menengah' => Yii::t('app', 'Tingkat Menengah'), 'Tingkat Atas' => Yii::t('app', 'Tingkat Atas'), 'Sarjana - S1' => Yii::t('app', 'Sarjana - S1'), 'Pasca Sarjana - S2' => Yii::t('app', 'Pasca Sarjana - S2'), 'Pasca Sarjana - S3' => Yii::t('app', 'Pasca Sarjana - S3')];
    }
}
