<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "usr".
 *
 * @property integer $id
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $street
 * @property string $suite
 * @property string $city
 * @property string $zipcode
 */
class Usr extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usr';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'phone', 'email', 'street', 'suite', 'city', 'zipcode'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'phone' => 'Phone',
            'email' => 'Email',
            'street' => 'Street',
            'suite' => 'Suite',
            'city' => 'City',
            'zipcode' => 'Zipcode',
        ];
    }
}
