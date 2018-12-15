<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "data_siswa".
 *
 * @property integer $id
 * @property string $Nama_Siswa
 * @property integer $NISN
 * @property string $jenis_kelamin
 * @property string $agama
 * @property string $tanggal_lahir
 * @property string $Pekerjaan_orang_Tua
 * @property string $Alamat_Peserta_Didik
 * @property string $ayah
 * @property string $ibu
 */
class DataSiswa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'data_siswa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nama_Siswa', 'NISN', 'jenis_kelamin', 'agama', 'tanggal_lahir', 'Pekerjaan_orang_Tua', 'Alamat_Peserta_Didik', 'ayah', 'ibu'], 'required'],
            [['NISN'], 'integer'],
            [['jenis_kelamin', 'agama'], 'string'],
            [['Nama_Siswa', 'ayah', 'ibu'], 'string', 'max' => 100],
            [['tanggal_lahir'], 'string', 'max' => 1000],
            [['Pekerjaan_orang_Tua'], 'string', 'max' => 255],
            [['Alamat_Peserta_Didik'], 'string', 'max' => 99],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Nama_Siswa' => 'Nama  Siswa',
            'NISN' => 'Nisn',
            'jenis_kelamin' => 'Jenis Kelamin',
            'agama' => 'Agama',
            'tanggal_lahir' => 'Tanggal Lahir',
            'Pekerjaan_orang_Tua' => 'Pekerjaan Orang  Tua',
            'Alamat_Peserta_Didik' => 'Alamat  Peserta  Didik',
            'ayah' => 'Ayah',
            'ibu' => 'Ibu',
        ];
    }
}
