<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ref_nilai".
 *
 * @property integer $id
 * @property string $id_pst
 * @property string $kode
 * @property string $nama
 * @property string $valids
 * @property double $angka
 */
class RefNilai extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ref_nilai';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['angka'], 'number'],
            [['id_pst'], 'string', 'max' => 5],
            [['kode', 'nama'], 'string', 'max' => 2],
            [['valids'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_pst' => 'Id Pst',
            'kode' => 'Kode',
            'nama' => 'Nama',
            'valids' => 'Valids',
            'angka' => 'Angka',
        ];
    }
}
