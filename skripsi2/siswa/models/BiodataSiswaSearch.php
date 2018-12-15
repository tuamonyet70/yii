<?php

namespace siswa\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\BiodataSiswa;

/**
 * BiodataSiswaSearch represents the model behind the search form about `common\models\BiodataSiswa`.
 */
class BiodataSiswaSearch extends BiodataSiswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'NIS'], 'integer'],
            [['Nama_depan', 'Nama_Belakang', 'jenis_kelamin', 'agama', 'semester', 'jurusan', 'kelas', 'tanggal_lahir', 'Alamat', 'ayah', 'ibu'], 'safe'],
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
        $query = BiodataSiswa::find();

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

        $query->andFilterWhere(['like', 'Nama_depan', $this->Nama_depan])
            ->andFilterWhere(['like', 'Nama_Belakang', $this->Nama_Belakang])
            ->andFilterWhere(['like', 'jenis_kelamin', $this->jenis_kelamin])
            ->andFilterWhere(['like', 'agama', $this->agama])
            ->andFilterWhere(['like', 'semester', $this->semester])
            ->andFilterWhere(['like', 'jurusan', $this->jurusan])
            ->andFilterWhere(['like', 'kelas', $this->kelas])
            ->andFilterWhere(['like', 'tanggal_lahir', $this->tanggal_lahir])
            ->andFilterWhere(['like', 'Alamat', $this->Alamat])
            ->andFilterWhere(['like', 'ayah', $this->ayah])
            ->andFilterWhere(['like', 'ibu', $this->ibu]);

        return $dataProvider;
    }
}
