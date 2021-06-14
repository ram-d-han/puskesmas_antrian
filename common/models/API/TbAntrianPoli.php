<?php

namespace common\models\API;

use Yii;

/**
 * This is the model class for table "tb_antrian_poli".
 *
 * @property int $id_antrian_poli
 * @property int $urutan
 * @property string $tgl_antrian
 * @property string $perkiraan_waktu
 * @property int $no_rm
 * @property string $poli_tujuan
 * @property string $status_antrian
 *
 * @property TbPasien $noRm
 * @property TbPoli $poliTujuan
 */
class TbAntrianPoli extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_antrian_poli';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['urutan', 'tgl_antrian', 'perkiraan_waktu', 'no_rm', 'poli_tujuan', 'status_antrian'], 'required'],
            [['urutan', 'no_rm'], 'integer'],
            [['tgl_antrian', 'perkiraan_waktu'], 'safe'],
            [['poli_tujuan'], 'string', 'max' => 25],
            [['status_antrian'], 'string', 'max' => 20],
            [['no_rm'], 'exist', 'skipOnError' => true, 'targetClass' => TbPasien::className(), 'targetAttribute' => ['no_rm' => 'no_rm']],
            [['poli_tujuan'], 'exist', 'skipOnError' => true, 'targetClass' => TbPoli::className(), 'targetAttribute' => ['poli_tujuan' => 'nama_poli']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_antrian_poli' => 'Id Antrian Poli',
            'urutan' => 'Urutan',
            'tgl_antrian' => 'Tgl Antrian',
            'perkiraan_waktu' => 'Perkiraan Waktu',
            'no_rm' => 'No Rm',
            'poli_tujuan' => 'Poli Tujuan',
            'status_antrian' => 'Status Antrian',
        ];
    }

    /**
     * Gets query for [[NoRm]].
     *
     * @return \yii\db\ActiveQuery|\common\models\API\query\TbPasienQuery
     */
    public function getNoRm()
    {
        return $this->hasOne(TbPasien::className(), ['no_rm' => 'no_rm']);
    }

    /**
     * Gets query for [[PoliTujuan]].
     *
     * @return \yii\db\ActiveQuery|\common\models\API\query\TbPoliQuery
     */
    public function getPoliTujuan()
    {
        return $this->hasOne(TbPoli::className(), ['nama_poli' => 'poli_tujuan']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\API\query\TbAntrianPoliQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\API\query\TbAntrianPoliQuery(get_called_class());
    }
}
