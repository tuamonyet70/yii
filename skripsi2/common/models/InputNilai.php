<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "input_nilai".
 *
 * @property integer $kelas
 * @property string $nama_siswa
 * @property integer $id
 */
class InputNilai extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'input_nilai';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kelas', 'nama_siswa', 'id'], 'required'],
            [['kelas', 'id'], 'integer'],
            [['nama_siswa'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kelas' => 'Kelas',
            'nama_siswa' => 'Nama Siswa',
            'id' => 'ID',
        ];
    }
}
