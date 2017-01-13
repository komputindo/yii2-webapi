<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "mhs".
 *
 * @property string $nim
 * @property string $nama
 * @property string $shift
 * @property string $tplhr
 * @property string $tglhr
 * @property string $kdpst
 * @property integer $usiam
 * @property string $kdjek
 * @property string $tahun
 * @property string $smawl
 * @property string $niman
 * @property string $nilun
 * @property string $btstu
 * @property string $assma
 * @property string $tgmsk
 * @property string $tglls
 * @property string $stmhs
 * @property string $mlsem
 * @property string $stpid
 * @property integer $sksdi
 * @property string $asnim
 * @property string $aspti
 * @property string $asjen
 * @property string $aspst
 * @property string $bistu
 * @property string $peksb
 * @property string $nmpek
 * @property string $ptpek
 * @property string $pspek
 * @property string $noprm
 * @property string $nokp1
 * @property string $nokp2
 * @property string $nokp3
 * @property string $nokp4
 * @property string $stkrs
 * @property string $smaw1
 * @property string $tgms1
 * @property string $almhs
 * @property string $telrm
 * @property string $nohpp
 * @property string $email
 * @property string $foto
 * @property string $noijs
 * @property string $pdlls
 * @property string $alm
 * @property string $assek
 * @property string $telp
 * @property string $jdl
 * @property string $pwd
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Pst $kdpst0
 */
class Mhs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mhs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nim', 'auth_key', 'password_hash', 'created_at', 'updated_at'], 'required'],
            [['tglhr', 'tgmsk', 'tglls', 'tgms1'], 'safe'],
            [['usiam', 'sksdi', 'status', 'created_at', 'updated_at'], 'integer'],
            [['nim', 'asnim', 'telrm'], 'string', 'max' => 15],
            [['nama'], 'string', 'max' => 30],
            [['shift', 'kdjek', 'stmhs', 'stpid', 'asjen', 'bistu', 'peksb', 'stkrs', 'pdlls'], 'string', 'max' => 1],
            [['tplhr'], 'string', 'max' => 20],
            [['kdpst', 'smawl', 'btstu', 'mlsem', 'aspst', 'pspek', 'smaw1'], 'string', 'max' => 5],
            [['tahun'], 'string', 'max' => 4],
            [['niman'], 'string', 'max' => 26],
            [['nilun'], 'string', 'max' => 21],
            [['assma'], 'string', 'max' => 2],
            [['aspti', 'ptpek'], 'string', 'max' => 6],
            [['nmpek', 'email'], 'string', 'max' => 40],
            [['noprm', 'nokp1', 'nokp2', 'nokp3', 'nokp4'], 'string', 'max' => 10],
            [['almhs', 'foto', 'noijs', 'pwd'], 'string', 'max' => 50],
            [['nohpp'], 'string', 'max' => 12],
            [['alm'], 'string', 'max' => 45],
            [['assek', 'telp'], 'string', 'max' => 25],
            [['jdl'], 'string', 'max' => 185],
            [['auth_key'], 'string', 'max' => 32],
            [['password_hash', 'password_reset_token'], 'string', 'max' => 255],
            [['kdpst'], 'exist', 'skipOnError' => true, 'targetClass' => Pst::className(), 'targetAttribute' => ['kdpst' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nim' => 'Nim',
            'nama' => 'Nama',
            'shift' => 'Shift',
            'tplhr' => 'Tplhr',
            'tglhr' => 'Tglhr',
            'kdpst' => 'Kdpst',
            'usiam' => 'Usiam',
            'kdjek' => 'Kdjek',
            'tahun' => 'Tahun',
            'smawl' => 'Smawl',
            'niman' => 'Niman',
            'nilun' => 'Nilun',
            'btstu' => 'Btstu',
            'assma' => 'Assma',
            'tgmsk' => 'Tgmsk',
            'tglls' => 'Tglls',
            'stmhs' => 'Stmhs',
            'mlsem' => 'Mlsem',
            'stpid' => 'Stpid',
            'sksdi' => 'Sksdi',
            'asnim' => 'Asnim',
            'aspti' => 'Aspti',
            'asjen' => 'Asjen',
            'aspst' => 'Aspst',
            'bistu' => 'Bistu',
            'peksb' => 'Peksb',
            'nmpek' => 'Nmpek',
            'ptpek' => 'Ptpek',
            'pspek' => 'Pspek',
            'noprm' => 'Noprm',
            'nokp1' => 'Nokp1',
            'nokp2' => 'Nokp2',
            'nokp3' => 'Nokp3',
            'nokp4' => 'Nokp4',
            'stkrs' => 'Stkrs',
            'smaw1' => 'Smaw1',
            'tgms1' => 'Tgms1',
            'almhs' => 'Almhs',
            'telrm' => 'Telrm',
            'nohpp' => 'Nohpp',
            'email' => 'Email',
            'foto' => 'Foto',
            'noijs' => 'Noijs',
            'pdlls' => 'Pdlls',
            'alm' => 'Alm',
            'assek' => 'Assek',
            'telp' => 'Telp',
            'jdl' => 'Jdl',
            'pwd' => 'Pwd',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKdpst0()
    {
        return $this->hasOne(Pst::className(), ['id' => 'kdpst']);
    }
}
