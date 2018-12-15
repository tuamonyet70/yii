<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "uploud".
 *
 * @property integer $id
 * @property string $file
 */
class Uploud extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'uploud';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'file'], 'required'],
            [['id'], 'integer'],
            [['file'], 'string', 'max' => 80],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'file' => 'File',
        ];
    }
}
