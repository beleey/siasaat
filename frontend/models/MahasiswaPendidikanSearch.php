<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\MahasiswaPendidikan;

/**
 * MahasiswaPendidikanSearch represents the model behind the search form about `frontend\models\MahasiswaPendidikan`.
 */
class MahasiswaPendidikanSearch extends MahasiswaPendidikan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['seq', 'pendidikan_tahun_masuk', 'pendidikan_tahun_lulus'], 'integer'],
            [['nim', 'pendidikan_tingkat', 'pendidikan_nama', 'pendidikan_gelar', 'pendidikan_kota'], 'safe'],
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
        $query = MahasiswaPendidikan::find();

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
            'pendidikan_tahun_masuk' => $this->pendidikan_tahun_masuk,
            'pendidikan_tahun_lulus' => $this->pendidikan_tahun_lulus,
        ]);

        $query->andFilterWhere(['like', 'nim', $this->nim])
            ->andFilterWhere(['like', 'pendidikan_tingkat', $this->pendidikan_tingkat])
            ->andFilterWhere(['like', 'pendidikan_nama', $this->pendidikan_nama])
            ->andFilterWhere(['like', 'pendidikan_gelar', $this->pendidikan_gelar])
            ->andFilterWhere(['like', 'pendidikan_kota', $this->pendidikan_kota]);
       
        return $dataProvider;
    }
}
