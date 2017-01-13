<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pst".
 *
 * @property string $id
 * @property string $nama
 * @property string $kdfak
 * @property string $kdjen
 * @property string $tgawl
 * @property string $smawl
 * @property string $statu
 * @property string $mlsem
 * @property integer $skstt
 * @property string $email
 * @property string $nomsk
 * @property string $tglsk
 * @property string $tglak
 * @property string $nomba
 * @property string $tglba
 * @property string $tglab
 * @property string $kdsta
 * @property string $kdfre
 * @property string $kdpel
 * @property string $nokps
 * @property string $telps
 * @property string $telpo
 * @property string $faksi
 * @property string $nmopr
 * @property string $telpr
 * @property string $lisah
 * @property string $kdps1
 * @property integer $created_by
 * @property string $created_on
 * @property integer $modified_by
 * @property string $modified_on
 * @property string $nm_ketua
 * @property string $nip_ketua
 * @property string $nm_wketua
 * @property string $nip_wketua
 *
 * @property Mhs[] $mhs
 */
class Pst extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pst';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['skstt', 'created_by', 'modified_by'], 'integer'],
            [['created_on', 'modified_on'], 'safe'],
            [['id', 'smawl', 'mlsem', 'kdps1'], 'string', 'max' => 5],
            [['nama'], 'string', 'max' => 50],
            [['kdfak'], 'string', 'max' => 2],
            [['kdjen', 'statu', 'kdsta', 'kdfre', 'kdpel', 'lisah'], 'string', 'max' => 1],
            [['tgawl', 'tglsk', 'tglak', 'tglba', 'tglab'], 'string', 'max' => 8],
            [['email', 'nomsk', 'nomba', 'nmopr'], 'string', 'max' => 40],
            [['nokps'], 'string', 'max' => 10],
            [['telps', 'telpo', 'faksi', 'telpr'], 'string', 'max' => 20],
            [['nm_ketua', 'nm_wketua'], 'string', 'max' => 45],
            [['nip_ketua', 'nip_wketua'], 'string', 'max' => 25],
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
            'kdfak' => 'Kdfak',
            'kdjen' => 'Kdjen',
            'tgawl' => 'Tgawl',
            'smawl' => 'Smawl',
            'statu' => 'Statu',
            'mlsem' => 'Mlsem',
            'skstt' => 'Skstt',
            'email' => 'Email',
            'nomsk' => 'Nomsk',
            'tglsk' => 'Tglsk',
            'tglak' => 'Tglak',
            'nomba' => 'Nomba',
            'tglba' => 'Tglba',
            'tglab' => 'Tglab',
            'kdsta' => 'Kdsta',
            'kdfre' => 'Kdfre',
            'kdpel' => 'Kdpel',
            'nokps' => 'Nokps',
            'telps' => 'Telps',
            'telpo' => 'Telpo',
            'faksi' => 'Faksi',
            'nmopr' => 'Nmopr',
            'telpr' => 'Telpr',
            'lisah' => 'Lisah',
            'kdps1' => 'Kdps1',
            'created_by' => 'Created By',
            'created_on' => 'Created On',
            'modified_by' => 'Modified By',
            'modified_on' => 'Modified On',
            'nm_ketua' => 'Nm Ketua',
            'nip_ketua' => 'Nip Ketua',
            'nm_wketua' => 'Nm Wketua',
            'nip_wketua' => 'Nip Wketua',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMhs()
    {
        return $this->hasMany(Mhs::className(), ['kdpst' => 'id']);
    }
}
