<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mahasiswa_pelayanan".
 *
 * @property integer $seq
 * @property string $nim
 * @property string $pelayanan_bidang
 * @property string $pelayanan_posisi
 * @property integer $pelayanan_tahun_awal
 * @property integer $pelayanan_tahun_akhir
 *
 * @property Mahasiswa $nim0
 */
class MahasiswaPelayanan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mahasiswa_pelayanan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nim', 'pelayanan_bidang', 'pelayanan_posisi', 'pelayanan_tahun_awal'], 'required'],
            [['pelayanan_tahun_awal', 'pelayanan_tahun_akhir'], 'integer'],
            [['nim'], 'string', 'max' => 50],
            [['pelayanan_bidang', 'pelayanan_posisi'], 'string', 'max' => 100]
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
            'pelayanan_bidang' => Yii::t('app', 'Bidang Pelayanan'),
            'pelayanan_posisi' => Yii::t('app', 'Posisi Pelayanan'),
            'pelayanan_tahun_awal' => Yii::t('app', 'Tahun Mulai'),
            'pelayanan_tahun_akhir' => Yii::t('app', 'Tahun Selesai'),
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
     * @return MahasiswaPelayananQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MahasiswaPelayananQuery(get_called_class());
    }
}
