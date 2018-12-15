<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\DataNilai;

/**
 * DataNilaiSearch represents the model behind the search form about `common\models\DataNilai`.
 */
class DataNilaiSearch extends DataNilai
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'jumlah_nilai', 'rata-rata_nilai', 'ketidakhadiran', 'total_nilai', 'nilai_rata_rata', 'naik_ke_kelas', 'tinggal_di_kelas', 'nis'], 'integer'],
            [['Nama_Siswa', 'ektrakurikuler', 'catatan_wali_kelas'], 'safe'],
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
        $query = DataNilai::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'jumlah_nilai' => $this->jumlah_nilai,
            'rata-rata_nilai' => $this->rata-rata_nilai,
            'ketidakhadiran' => $this->ketidakhadiran,
            'total_nilai' => $this->total_nilai,
            'nilai_rata_rata' => $this->nilai_rata_rata,
            'naik_ke_kelas' => $this->naik_ke_kelas,
            'tinggal_di_kelas' => $this->tinggal_di_kelas,
            'nis' => $this->nis,
        ]);

        $query->andFilterWhere(['like', 'Nama_Siswa', $this->Nama_Siswa])
            ->andFilterWhere(['like', 'ektrakurikuler', $this->ektrakurikuler])
            ->andFilterWhere(['like', 'catatan_wali_kelas', $this->catatan_wali_kelas]);

        return $dataProvider;
    }
}
