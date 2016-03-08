<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\MahasiswaHasiltest;

/**
 * MahasiswaHasiltestSearch represents the model behind the search form about `frontend\models\MahasiswaHasiltest`.
 */
class MahasiswaHasiltestSearch extends MahasiswaHasiltest
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['seq'], 'integer'],
            [['nim', 'nama_test', 'hasil'], 'safe'],
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
        $query = MahasiswaHasiltest::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
            'defaultOrder' => [
                'nama_test' => SORT_ASC,
            ]
    ],
        ]);

        $dataProvider->sort->attributes['nama_test'] = [
            // The tables are the ones our relation are configured to
            // in my case they are prefixed with "tbl_"
            'asc' => ['nama_test' => SORT_ASC],
            'desc' => ['nama_test' => SORT_DESC],
        ];

        $this->load($params,'');

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'seq' => $this->seq,
        ]);

        $query->andFilterWhere(['like', 'nim', $this->nim])
            ->andFilterWhere(['like', 'nama_test', $this->nama_test])
            ->andFilterWhere(['like', 'hasil', $this->hasil]);

        return $dataProvider;
    }
}
