<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jurusan".
 *
 * @property integer $id
 * @property string $label
 */
class Jurusan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jurusan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'label'], 'required'],
            [['id'], 'integer'],
            [['label'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'label' => 'Label',
        ];
    }
}
