<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kmk_details".
 *
 * @property integer $id
 * @property string $id_pst
 * @property string $id_kmk
 * @property double $sksmk
 * @property double $skstm
 * @property double $skspr
 * @property double $skslp
 * @property string $semes
 * @property string $kdwpl
 * @property string $kdkur
 * @property string $kdkel
 * @property string $nodos
 * @property string $jenja
 * @property string $prodi
 * @property string $stkmk
 * @property string $slbus
 * @property string $sappp
 * @property string $bhnaj
 * @property string $diktt
 * @property string $kduta
 * @property string $kdkug
 * @property string $kdlai
 * @property string $kdmpa
 * @property string $kdmpb
 * @property string $kdmpc
 * @property string $kdmpd
 * @property string $kdmpe
 * @property string $kdmpf
 * @property string $kdmpg
 * @property string $kdmph
 * @property string $kdmpit
 * @property string $kdmpj
 * @property string $crmkl
 * @property string $prstd
 * @property string $smgds
 * @property string $rpsim
 * @property string $csstu
 * @property string $disln
 * @property string $sdiln
 * @property string $codln
 * @property string $colln
 * @property string $ctxin
 * @property string $pjbln
 * @property string $pbbln
 * @property double $ujtls
 * @property double $tgmkl
 * @property double $tgmod
 * @property double $pstsi
 * @property double $simul
 * @property double $lainn
 * @property double $ujtl1
 * @property double $tgmk1
 * @property double $tgmo1
 * @property double $psts1
 * @property double $simu1
 * @property double $lain1t
 * @property integer $created_by
 * @property string $created_on
 * @property integer $modified_by
 * @property string $modified_on
 *
 * @property Kmk $idKmk
 */
class KmkDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kmk_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sksmk', 'skstm', 'skspr', 'skslp', 'ujtls', 'tgmkl', 'tgmod', 'pstsi', 'simul', 'lainn', 'ujtl1', 'tgmk1', 'tgmo1', 'psts1', 'simu1', 'lain1t'], 'number'],
            [['created_by', 'modified_by'], 'integer'],
            [['created_on', 'modified_on'], 'safe'],
            [['id_pst', 'prodi'], 'string', 'max' => 5],
            [['id_kmk'], 'string', 'max' => 8],
            [['semes'], 'string', 'max' => 2],
            [['kdwpl', 'kdkur', 'kdkel', 'stkmk'], 'string', 'max' => 3],
            [['nodos'], 'string', 'max' => 10],
            [['jenja', 'slbus', 'sappp', 'bhnaj', 'diktt', 'kduta', 'kdkug', 'kdlai', 'kdmpa', 'kdmpb', 'kdmpc', 'kdmpd', 'kdmpe', 'kdmpf', 'kdmpg', 'kdmph', 'kdmpit', 'kdmpj', 'crmkl', 'prstd', 'smgds', 'rpsim', 'csstu', 'disln', 'sdiln', 'codln', 'colln', 'ctxin', 'pjbln', 'pbbln'], 'string', 'max' => 1],
            [['id_kmk'], 'exist', 'skipOnError' => true, 'targetClass' => Kmk::className(), 'targetAttribute' => ['id_kmk' => 'id']],
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
            'id_kmk' => 'Id Kmk',
            'sksmk' => 'Sksmk',
            'skstm' => 'Skstm',
            'skspr' => 'Skspr',
            'skslp' => 'Skslp',
            'semes' => 'Semes',
            'kdwpl' => 'Kdwpl',
            'kdkur' => 'Kdkur',
            'kdkel' => 'Kdkel',
            'nodos' => 'Nodos',
            'jenja' => 'Jenja',
            'prodi' => 'Prodi',
            'stkmk' => 'Stkmk',
            'slbus' => 'Slbus',
            'sappp' => 'Sappp',
            'bhnaj' => 'Bhnaj',
            'diktt' => 'Diktt',
            'kduta' => 'Kduta',
            'kdkug' => 'Kdkug',
            'kdlai' => 'Kdlai',
            'kdmpa' => 'Kdmpa',
            'kdmpb' => 'Kdmpb',
            'kdmpc' => 'Kdmpc',
            'kdmpd' => 'Kdmpd',
            'kdmpe' => 'Kdmpe',
            'kdmpf' => 'Kdmpf',
            'kdmpg' => 'Kdmpg',
            'kdmph' => 'Kdmph',
            'kdmpit' => 'Kdmpit',
            'kdmpj' => 'Kdmpj',
            'crmkl' => 'Crmkl',
            'prstd' => 'Prstd',
            'smgds' => 'Smgds',
            'rpsim' => 'Rpsim',
            'csstu' => 'Csstu',
            'disln' => 'Disln',
            'sdiln' => 'Sdiln',
            'codln' => 'Codln',
            'colln' => 'Colln',
            'ctxin' => 'Ctxin',
            'pjbln' => 'Pjbln',
            'pbbln' => 'Pbbln',
            'ujtls' => 'Ujtls',
            'tgmkl' => 'Tgmkl',
            'tgmod' => 'Tgmod',
            'pstsi' => 'Pstsi',
            'simul' => 'Simul',
            'lainn' => 'Lainn',
            'ujtl1' => 'Ujtl1',
            'tgmk1' => 'Tgmk1',
            'tgmo1' => 'Tgmo1',
            'psts1' => 'Psts1',
            'simu1' => 'Simu1',
            'lain1t' => 'Lain1t',
            'created_by' => 'Created By',
            'created_on' => 'Created On',
            'modified_by' => 'Modified By',
            'modified_on' => 'Modified On',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdKmk()
    {
        return $this->hasOne(Kmk::className(), ['id' => 'id_kmk']);
    }
}
