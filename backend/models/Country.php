<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "country".
 *
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property integer $population
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code', 'name', 'population'], 'required'],
            [['population'], 'integer'],
            [['code', 'name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'name' => 'Name',
            'population' => 'Population',
        ];
    }
}
