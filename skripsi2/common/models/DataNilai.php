<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "data_nilai".
 *
 * @property integer $id
 * @property integer $nis
 * @property string $Nama_Siswa
 * @property integer $jumlah_nilai
 * @property integer $rata_rata_nilai
 * @property string $ektrakurikuler
 * @property integer $ketidakhadiran
 * @property integer $total_nilai
 * @property string $catatan_wali_kelas
 * @property string $naik_ke_kelas
 * @property string $tinggal_di_kelas
 */
class DataNilai extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'data_nilai';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nis', 'Nama_Siswa', 'jumlah_nilai', 'rata_rata_nilai', 'ektrakurikuler', 'ketidakhadiran', 'total_nilai', 'catatan_wali_kelas', 'naik_ke_kelas', 'tinggal_di_kelas'], 'required'],
            [['nis', 'jumlah_nilai', 'rata_rata_nilai', 'ketidakhadiran', 'total_nilai'], 'integer'],
            [['Nama_Siswa'], 'string', 'max' => 25],
            [['ektrakurikuler'], 'string', 'max' => 100],
            [['catatan_wali_kelas', 'naik_ke_kelas'], 'string', 'max' => 255],
            [['tinggal_di_kelas'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nis' => 'Nis',
            'Nama_Siswa' => 'Nama  Siswa',
            'jumlah_nilai' => 'Jumlah Nilai',
            'rata_rata_nilai' => 'Rata Rata Nilai',
            'ektrakurikuler' => 'Ektrakurikuler',
            'ketidakhadiran' => 'Ketidakhadiran',
            'total_nilai' => 'Total Nilai',
            'catatan_wali_kelas' => 'Catatan Wali Kelas',
            'naik_ke_kelas' => 'Naik Ke Kelas',
            'tinggal_di_kelas' => 'Tinggal Di Kelas',
        ];
    }
}
