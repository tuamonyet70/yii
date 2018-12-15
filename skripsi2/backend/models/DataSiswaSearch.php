<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\DataSiswa;

/**
 * DataSiswaSearch represents the model behind the search form about `common\models\DataSiswa`.
 */
class DataSiswaSearch extends DataSiswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'NIS'], 'integer'],
            [['Nama_Siswa', 'jenis_kelamin', 'agama', 'tanggal_lahir', 'Pekerjaan_orang_Tua', 'Alamat_Peserta_Didik', 'ayah', 'ibu'], 'safe'],
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
        $query = DataSiswa::find();

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
            'NIS' => $this->NIS,
        ]);

        $query->andFilterWhere(['like', 'Nama_Siswa', $this->Nama_Siswa])
            ->andFilterWhere(['like', 'jenis_kelamin', $this->jenis_kelamin])
            ->andFilterWhere(['like', 'agama', $this->agama])
            ->andFilterWhere(['like', 'tanggal_lahir', $this->tanggal_lahir])
            ->andFilterWhere(['like', 'Pekerjaan_orang_Tua', $this->Pekerjaan_orang_Tua])
            ->andFilterWhere(['like', 'Alamat_Peserta_Didik', $this->Alamat_Peserta_Didik])
            ->andFilterWhere(['like', 'ayah', $this->ayah])
            ->andFilterWhere(['like', 'ibu', $this->ibu]);

        return $dataProvider;
    }
}
