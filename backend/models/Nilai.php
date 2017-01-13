<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nilai".
 *
 * @property integer $id
 * @property string $nim
 * @property string $id_kmk
 * @property string $smt
 * @property string $nilai
 * @property integer $created_by
 * @property string $created_on
 * @property integer $modified_by
 * @property string $modified_on
 */
class Nilai extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nilai';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_by', 'modified_by'], 'integer'],
            [['created_on', 'modified_on'], 'safe'],
            [['nim'], 'string', 'max' => 15],
            [['id_kmk'], 'string', 'max' => 8],
            [['smt'], 'string', 'max' => 5],
            [['nilai'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'id_kmk' => 'Id Kmk',
            'smt' => 'Smt',
            'nilai' => 'Nilai',
            'created_by' => 'Created By',
            'created_on' => 'Created On',
            'modified_by' => 'Modified By',
            'modified_on' => 'Modified On',
        ];
    }
}
