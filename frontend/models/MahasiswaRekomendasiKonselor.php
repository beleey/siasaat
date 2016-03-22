<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mahasiswa_rekomendasi_konselor".
 *
 * @property integer $seq
 * @property string $nim
 * @property string $rekomendasi
 */
class MahasiswaRekomendasiKonselor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mahasiswa_rekomendasi_konselor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nim', 'rekomendasi'], 'required'],
            [['rekomendasi'], 'string'],
            [['nim'], 'string', 'max' => 30]
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
            'rekomendasi' => Yii::t('app', 'Catatan'),
        ];
    }
}
