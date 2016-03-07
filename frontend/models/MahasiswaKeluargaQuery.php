<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[MahasiswaKeluarga]].
 *
 * @see MahasiswaKeluarga
 */
class MahasiswaKeluargaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return MahasiswaKeluarga[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return MahasiswaKeluarga|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}