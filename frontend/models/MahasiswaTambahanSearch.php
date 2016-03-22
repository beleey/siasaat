<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\MahasiswaTambahan;

/**
 * MahasiswaTambahanSearch represents the model behind the search form about `frontend\models\MahasiswaTambahan`.
 */
class MahasiswaTambahanSearch extends MahasiswaTambahan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['seq', 'tunangan_status', 'bercerai_status', 'biaya_hutang_status', 'biaya_hutang_besar', 'hukum_status', 'baca_alkitab_jumlah', 'pernah_daftar_saat_status', 'pernah_daftar_saat_tahun', 'seminari_lain_daftar_status', 'seminari_lain_daftar_tahun', 'created_at', 'user_id'], 'integer'],
            [['nim', 'tunangan_nama', 'bercerai_alasan', 'biaya_tanggung', 'hukum_penjelasan', 'gangguan_jiwa', 'gangguan_jiwa_keluarga', 'terikat_kebiasaan', 'terima_tuhan_waktu', 'baptis_sidi_waktu', 'baptis_sidi_pendeta', 'baptis_sidi_gereja', 'baca_alkitab_rindu_waktu', 'ikut_aliran_sesat', 'gereja_anggota_nama', 'gereja_anggota_alamat', 'gereja_anggota_kota', 'gereja_anggota_kodepos', 'gereja_anggota_telp', 'gereja_anggota_email', 'gereja_anggota_gembala', 'gereja_ibadah_nama', 'gereja_ibadah_alamat', 'gereja_ibadah_kota', 'gereja_ibadah_kodepos', 'gereja_ibadah_gembala', 'mengapa_saat', 'rencana_setelah_tamat', 'seminari_lain_daftar_nama', 'seminari_lain_skors', 'minat', 'pengalaman_hidup'], 'safe'],
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
        $query = MahasiswaTambahan::find();

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
            'tunangan_status' => $this->tunangan_status,
            'bercerai_status' => $this->bercerai_status,
            'biaya_hutang_status' => $this->biaya_hutang_status,
            'biaya_hutang_besar' => $this->biaya_hutang_besar,
            'hukum_status' => $this->hukum_status,
            'terima_tuhan_waktu' => $this->terima_tuhan_waktu,
            'baptis_sidi_waktu' => $this->baptis_sidi_waktu,
            'baca_alkitab_jumlah' => $this->baca_alkitab_jumlah,
            'pernah_daftar_saat_status' => $this->pernah_daftar_saat_status,
            'pernah_daftar_saat_tahun' => $this->pernah_daftar_saat_tahun,
            'seminari_lain_daftar_status' => $this->seminari_lain_daftar_status,
            'seminari_lain_daftar_tahun' => $this->seminari_lain_daftar_tahun,
            'created_at' => $this->created_at,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'nim', $this->nim])
            ->andFilterWhere(['like', 'tunangan_nama', $this->tunangan_nama])
            ->andFilterWhere(['like', 'bercerai_alasan', $this->bercerai_alasan])
            ->andFilterWhere(['like', 'biaya_tanggung', $this->biaya_tanggung])
            ->andFilterWhere(['like', 'hukum_penjelasan', $this->hukum_penjelasan])
            ->andFilterWhere(['like', 'gangguan_jiwa', $this->gangguan_jiwa])
            ->andFilterWhere(['like', 'gangguan_jiwa_keluarga', $this->gangguan_jiwa_keluarga])
            ->andFilterWhere(['like', 'terikat_kebiasaan', $this->terikat_kebiasaan])
            ->andFilterWhere(['like', 'baptis_sidi_pendeta', $this->baptis_sidi_pendeta])
            ->andFilterWhere(['like', 'baptis_sidi_gereja', $this->baptis_sidi_gereja])
            ->andFilterWhere(['like', 'baca_alkitab_rindu_waktu', $this->baca_alkitab_rindu_waktu])
            ->andFilterWhere(['like', 'ikut_aliran_sesat', $this->ikut_aliran_sesat])
            ->andFilterWhere(['like', 'gereja_anggota_nama', $this->gereja_anggota_nama])
            ->andFilterWhere(['like', 'gereja_anggota_alamat', $this->gereja_anggota_alamat])
            ->andFilterWhere(['like', 'gereja_anggota_kota', $this->gereja_anggota_kota])
            ->andFilterWhere(['like', 'gereja_anggota_kodepos', $this->gereja_anggota_kodepos])
            ->andFilterWhere(['like', 'gereja_anggota_telp', $this->gereja_anggota_telp])
            ->andFilterWhere(['like', 'gereja_anggota_email', $this->gereja_anggota_email])
            ->andFilterWhere(['like', 'gereja_anggota_gembala', $this->gereja_anggota_gembala])
            ->andFilterWhere(['like', 'gereja_ibadah_nama', $this->gereja_ibadah_nama])
            ->andFilterWhere(['like', 'gereja_ibadah_alamat', $this->gereja_ibadah_alamat])
            ->andFilterWhere(['like', 'gereja_ibadah_kota', $this->gereja_ibadah_kota])
            ->andFilterWhere(['like', 'gereja_ibadah_kodepos', $this->gereja_ibadah_kodepos])
            ->andFilterWhere(['like', 'gereja_ibadah_gembala', $this->gereja_ibadah_gembala])
            ->andFilterWhere(['like', 'mengapa_saat', $this->mengapa_saat])
            ->andFilterWhere(['like', 'rencana_setelah_tamat', $this->rencana_setelah_tamat])
            ->andFilterWhere(['like', 'seminari_lain_daftar_nama', $this->seminari_lain_daftar_nama])
            ->andFilterWhere(['like', 'seminari_lain_skors', $this->seminari_lain_skors])
            ->andFilterWhere(['like', 'minat', $this->minat])
            ->andFilterWhere(['like', 'pengalaman_hidup', $this->pengalaman_hidup]);

        return $dataProvider;
    }
}
