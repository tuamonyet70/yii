<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "siswa_detail".
 *
 * @property string $first_name
 * @property string $last_name
 * @property string $tanggal_lahir
 * @property string $jenis_kelamin
 * @property string $tempat_tinggal
 * @property integer $id
 * @property string $ayah
 * @property string $ibu
 * @property string $jurusan
 * @property string $kelas
 * @property string $semesterr
 */
class SiswaDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'siswa_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'tanggal_lahir', 'jenis_kelamin', 'tempat_tinggal', 'id', 'ayah', 'ibu', 'jurusan', 'kelas', 'semesterr'], 'required'],
            [['jenis_kelamin'], 'string'],
            [['id'], 'integer'],
            [['first_name', 'last_name', 'tempat_tinggal', 'ayah', 'ibu', 'jurusan', 'kelas'], 'string', 'max' => 100],
            [['tanggal_lahir'], 'string', 'max' => 12],
            [['semesterr'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'tanggal_lahir' => 'Tanggal Lahir',
            'jenis_kelamin' => 'Jenis Kelamin',
            'tempat_tinggal' => 'Tempat Tinggal',
            'id' => 'ID',
            'ayah' => 'Ayah',
            'ibu' => 'Ibu',
            'jurusan' => 'Jurusan',
            'kelas' => 'Kelas',
            'semesterr' => 'Semesterr',
        ];
    }
}
