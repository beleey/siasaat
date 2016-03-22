<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\MahasiswaPelayanan;

/**
 * MahasiswaPelayananSearch represents the model behind the search form about `frontend\models\MahasiswaPelayanan`.
 */
class MahasiswaPelayananSearch extends MahasiswaPelayanan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['seq', 'pelayanan_tahun_awal', 'pelayanan_tahun_akhir'], 'integer'],
            [['nim', 'pelayanan_bidang', 'pelayanan_posisi'], 'safe'],
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
        $query = MahasiswaPelayanan::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                    'defaultOrder' => [
                        'pelayanan_tahun_awal' => SORT_ASC,
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
            'pelayanan_tahun_awal' => $this->pelayanan_tahun_awal,
            'pelayanan_tahun_akhir' => $this->pelayanan_tahun_akhir,
        ]);

        $query->andFilterWhere(['like', 'nim', $this->nim])
            ->andFilterWhere(['like', 'pelayanan_bidang', $this->pelayanan_bidang])
            ->andFilterWhere(['like', 'pelayanan_posisi', $this->pelayanan_posisi]);

        return $dataProvider;
    }
}
