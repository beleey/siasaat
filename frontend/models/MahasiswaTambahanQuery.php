<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[MahasiswaRekomendasi]].
 *
 * @see MahasiswaRekomendasi
 */
class MahasiswaTambahanQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return MahasiswaRekomendasi[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return MahasiswaRekomendasi|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}