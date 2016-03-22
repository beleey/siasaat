<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\MahasiswaKeluarga;

/**
 * MahasiswaKeluargaSearch represents the model behind the search form about `frontend\models\MahasiswaKeluarga`.
 */
class MahasiswaKeluargaSearch extends MahasiswaKeluarga
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['seq', 'keluarga_hidup_status'], 'integer'],
            [['nim', 'keluarga_nama', 'keluarga_hubungan', 'keluarga_tgl_lahir', 'keluarga_alamat', 'keluarga_telp_rumah', 'keluarga_telp_hp', 'keluarga_pekerjaan', 'keluarga_agama', 'keluarga_gereja', 'keluarga_keterangan'], 'safe'],
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
        $query = MahasiswaKeluarga::find();

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
            'keluarga_tgl_lahir' => $this->keluarga_tgl_lahir,
            'keluarga_hidup_status' => $this->keluarga_hidup_status,
        ]);

        $query->andFilterWhere(['like', 'nim', $this->nim])
            ->andFilterWhere(['like', 'keluarga_nama', $this->keluarga_nama])
            ->andFilterWhere(['like', 'keluarga_hubungan', $this->keluarga_hubungan])
            ->andFilterWhere(['like', 'keluarga_alamat', $this->keluarga_alamat])
            ->andFilterWhere(['like', 'keluarga_telp_rumah', $this->keluarga_telp_rumah])
            ->andFilterWhere(['like', 'keluarga_telp_hp', $this->keluarga_telp_hp])
            ->andFilterWhere(['like', 'keluarga_pekerjaan', $this->keluarga_pekerjaan])
            ->andFilterWhere(['like', 'keluarga_agama', $this->keluarga_agama])
            ->andFilterWhere(['like', 'keluarga_gereja', $this->keluarga_gereja]);

        return $dataProvider;
    }
}
