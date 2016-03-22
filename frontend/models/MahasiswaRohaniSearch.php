<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\MahasiswaRohani;

/**
 * MahasiswaRohaniSearch represents the model behind the search form about `frontend\models\MahasiswaRohani`.
 */
class MahasiswaRohaniSearch extends MahasiswaRohani
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['seq'], 'integer'],
            [['nim', 'kesaksian_pertobatan', 'kesaksian_panggilan', 'kehidupan_rohani'], 'safe'],
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
        $query = MahasiswaRohani::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'seq' => $this->seq,
        ]);

        $query->andFilterWhere(['like', 'nim', $this->nim])
            ->andFilterWhere(['like', 'kesaksian_pertobatan', $this->kesaksian_pertobatan])
            ->andFilterWhere(['like', 'kesaksian_panggilan', $this->kesaksian_panggilan])
            ->andFilterWhere(['like', 'kehidupan_rohani', $this->kehidupan_rohani]);

        return $dataProvider;
    }
}
