<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data_nilai".
 *
 * @property string $mata_pelajaran
 * @property integer $tugas1
 * @property integer $tugas2
 * @property integer $uts
 * @property integer $uas
 * @property integer $total_nilai
 * @property integer $nilai_rata_rata
 * @property integer $id
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
            [['mata_pelajaran', 'tugas1', 'tugas2', 'uts', 'uas', 'total_nilai', 'nilai_rata_rata', 'id'], 'required'],
            [['tugas1', 'tugas2', 'uts', 'uas', 'total_nilai', 'nilai_rata_rata', 'id'], 'integer'],
            [['mata_pelajaran'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mata_pelajaran' => 'Mata Pelajaran',
            'tugas1' => 'Tugas1',
            'tugas2' => 'Tugas2',
            'uts' => 'Uts',
            'uas' => 'Uas',
            'total_nilai' => 'Total Nilai',
            'nilai_rata_rata' => 'Nilai Rata Rata',
            'id' => 'ID',
        ];
    }
}
