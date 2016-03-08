<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mahasiswa_hasiltest".
 *
 * @property integer $seq
 * @property string $nim
 * @property string $nama_test
 * @property string $hasil
 *
 * @property Mahasiswa $nim0
 */
class MahasiswaHasiltest extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mahasiswa_hasiltest';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nim', 'nama_test', 'hasil'], 'required'],
            [['hasil'], 'string'],
            [['nim'], 'string', 'max' => 30],
            [['nama_test'], 'string', 'max' => 255]
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
            'nama_test' => Yii::t('app', 'Nama Test'),
            'hasil' => Yii::t('app', 'Hasil'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNim0()
    {
        return $this->hasOne(Mahasiswa::className(), ['nim' => 'nim']);
    }

    public static function getJenistes() 
    {
        return [
            '1_alkitab' => Yii::t('app', 'Alkitab'),
            '2_b_indo' => Yii::t('app', 'Bahasa Indonesia'),
            '3_b_ing' => Yii::t('app', 'Bahasa Inggris'),
            '4_toefl' => Yii::t('app', 'TOEFL'),
            '5_iq' => Yii::t('app', 'I.Q.'),
            '6_analisis' => Yii::t('app', 'Analisis'),
            '7_kepribadian' => Yii::t('app', 'Kepribadian'),
            '8_karunia' => Yii::t('app', 'Karunia'),
            '9_wawancara' => Yii::t('app', 'Wawancara'),
            ];
    }
}
