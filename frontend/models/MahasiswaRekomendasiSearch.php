<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\MahasiswaRekomendasi;

/**
 * MahasiswaRekomendasiSearch represents the model behind the search form about `frontend\models\MahasiswaRekomendasi`.
 */
class MahasiswaRekomendasiSearch extends MahasiswaRekomendasi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['seq'], 'integer'],
            [['nim', 'rekomendasi_nama', 'rekomendasi_jabatan', 'rekomendasi_alamat', 'rekomendasi_kota', 'rekomendasi_kodepos', 'rekomendasi_telp_rumah', 'rekomendasi_telp_hp', 'rekomendasi_email', 'rekomendasi_isi'], 'safe'],
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
        $query = MahasiswaRekomendasi::find();

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
        ]);

        $query->andFilterWhere(['like', 'nim', $this->nim])
            ->andFilterWhere(['like', 'rekomendasi_nama', $this->rekomendasi_nama])
            ->andFilterWhere(['like', 'rekomendasi_jabatan', $this->rekomendasi_jabatan])
            ->andFilterWhere(['like', 'rekomendasi_alamat', $this->rekomendasi_alamat])
            ->andFilterWhere(['like', 'rekomendasi_kota', $this->rekomendasi_kota])
            ->andFilterWhere(['like', 'rekomendasi_kodepos', $this->rekomendasi_kodepos])
            ->andFilterWhere(['like', 'rekomendasi_telp_rumah', $this->rekomendasi_telp_rumah])
            ->andFilterWhere(['like', 'rekomendasi_telp_hp', $this->rekomendasi_telp_hp])
            ->andFilterWhere(['like', 'rekomendasi_email', $this->rekomendasi_email])
            ->andFilterWhere(['like', 'rekomendasi_isi', $this->rekomendasi_isi]);

        return $dataProvider;
    }
}
