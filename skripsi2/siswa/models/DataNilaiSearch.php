<?php

namespace siswa\models;

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
            [['mata_pelajaran'], 'safe'],
            [['tugas1', 'tugas2', 'uts', 'uas', 'total_nilai', 'nilai_rata_rata', 'id'], 'integer'],
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
            'tugas1' => $this->tugas1,
            'tugas2' => $this->tugas2,
            'uts' => $this->uts,
            'uas' => $this->uas,
            'total_nilai' => $this->total_nilai,
            'nilai_rata_rata' => $this->nilai_rata_rata,
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'mata_pelajaran', $this->mata_pelajaran]);

        return $dataProvider;
    }
}
