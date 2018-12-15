<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "input_siswa".
 *
 * @property integer $id
 * @property integer $NIS
 * @property string $nama_siswa
 * @property string $jenis_kelamin
 * @property string $agama
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 */
class InputSiswa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'input_siswa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'NIS', 'nama_siswa', 'jenis_kelamin', 'agama', 'tempat_lahir'], 'required'],
            [['id', 'NIS'], 'integer'],
            [['tanggal_lahir'], 'safe'],
            [['nama_siswa', 'tempat_lahir'], 'string', 'max' => 15],
            [['jenis_kelamin'], 'string', 'max' => 20],
            [['agama'], 'string', 'max' => 7]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'NIS' => 'Nis',
            'nama_siswa' => 'Nama Siswa',
            'jenis_kelamin' => 'Jenis Kelamin',
            'agama' => 'Agama',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
        ];
    }
}
