<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\MahasiswaPekerjaan;

/**
 * MahasiswaPekerjaanSearch represents the model behind the search form about `frontend\models\MahasiswaPekerjaan`.
 */
class MahasiswaPekerjaanSearch extends MahasiswaPekerjaan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['seq', 'pekerjaan_tahun_masuk', 'pekerjaan_tahun_keluar'], 'integer'],
            [['nim', 'pekerjaan_tempat', 'pekerjaan_jabatan'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = MahasiswaPekerjaan::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params,'');

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'seq' => $this->seq,
            'pekerjaan_tahun_masuk' => $this->pekerjaan_tahun_masuk,
            'pekerjaan_tahun_keluar' => $this->pekerjaan_tahun_keluar,
        ]);

        $query->andFilterWhere(['like', 'nim', $this->nim])
            ->andFilterWhere(['like', 'pekerjaan_tempat', $this->pekerjaan_tempat])
            ->andFilterWhere(['like', 'pekerjaan_jabatan', $this->pekerjaan_jabatan]);

        return $dataProvider;
    }
}
