<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kmk".
 *
 * @property string $id
 * @property string $nama
 * @property integer $created_by
 * @property string $created_on
 * @property integer $modified_by
 * @property string $modified_on
 *
 * @property KmkDetails[] $kmkDetails
 */
class Kmk extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kmk';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['created_by', 'modified_by'], 'integer'],
            [['created_on', 'modified_on'], 'safe'],
            [['id'], 'string', 'max' => 8],
            [['nama'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'created_by' => 'Created By',
            'created_on' => 'Created On',
            'modified_by' => 'Modified By',
            'modified_on' => 'Modified On',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKmkDetails()
    {
        return $this->hasMany(KmkDetails::className(), ['id_kmk' => 'id']);
    }
}
