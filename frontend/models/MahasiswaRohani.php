<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mahasiswa_rohani".
 *
 * @property integer $seq
 * @property string $nim
 * @property string $kesaksian_pertobatan
 * @property string $kesaksian_panggilan
 * @property string $kehidupan_rohani
 *
 * @property Mahasiswa $nim0
 */
class MahasiswaRohani extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mahasiswa_rohani';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nim'], 'required'],
            [['kesaksian_pertobatan', 'kesaksian_panggilan', 'kehidupan_rohani'], 'string'],
            [['nim'], 'string', 'max' => 50]
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
            'kesaksian_pertobatan' => Yii::t('app', 'Kesaksian Pertobatan'),
            'kesaksian_panggilan' => Yii::t('app', 'Kesaksian Panggilan'),
            'kehidupan_rohani' => Yii::t('app', 'Kehidupan Rohani'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNim0()
    {
        return $this->hasOne(Mahasiswa::className(), ['nim' => 'nim']);
    }
}
