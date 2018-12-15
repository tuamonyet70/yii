<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kelas".
 *
 * @property integer $id
 * @property string $jurusan
 */
class Kelas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kelas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'jurusan'], 'required'],
            [['id'], 'integer'],
            [['jurusan'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jurusan' => 'Jurusan',
        ];
    }
}
