<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[MahasiswaPenyakit]].
 *
 * @see MahasiswaPenyakit
 */
class MahasiswaPenyakitQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return MahasiswaPenyakit[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return MahasiswaPenyakit|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}