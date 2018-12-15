<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "mapel".
 *
 * @property integer $id
 * @property string $nama_mapel
 */
class Mapel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mapel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_mapel'], 'required'],
            [['nama_mapel'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_mapel' => 'Nama Mapel',
        ];
    }
}
