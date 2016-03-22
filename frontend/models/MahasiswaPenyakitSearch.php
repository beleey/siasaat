<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\MahasiswaPenyakit;

/**
 * MahasiswaPenyakitSearch represents the model behind the search form about `frontend\models\MahasiswaPenyakit`.
 */
class MahasiswaPenyakitSearch extends MahasiswaPenyakit
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['seq', 'penyakit_tahun'], 'integer'],
            [['nim', 'penyakit_nama', 'penyakit_keterangan'], 'safe'],
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
        $query = MahasiswaPenyakit::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                    'defaultOrder' => [
                        'penyakit_tahun' => SORT_ASC,
                    ]
            ],
        ]);

        $this->load($params,'');

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'seq' => $this->seq,
            'penyakit_tahun' => $this->penyakit_tahun,
        ]);

        $query->andFilterWhere(['like', 'nim', $this->nim])
            ->andFilterWhere(['like', 'penyakit_nama', $this->penyakit_nama])
            ->andFilterWhere(['like', 'penyakit_keterangan', $this->penyakit_keterangan]);

        return $dataProvider;
    }
}
