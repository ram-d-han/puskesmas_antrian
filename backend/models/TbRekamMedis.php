<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tb_rekam_medis".
 *
 * @property int $id_rekam_medis
 * @property string $tgl_periksa
 * @property int $no_rm
 * @property string $anamnesa
 * @property string $blk
 * @property string $diagnosa
 * @property string $terapi
 * @property string $askep
 * @property string $kie
 *
 * @property TbPasien $noRm
 */
class TbRekamMedis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_rekam_medis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_periksa', 'no_rm', 'anamnesa', 'blk', 'diagnosa', 'terapi', 'askep', 'kie'], 'required'],
            [['tgl_periksa'], 'safe'],
            [['no_rm'], 'integer'],
            [['anamnesa', 'blk', 'diagnosa'], 'string', 'max' => 100],
            [['terapi', 'askep', 'kie'], 'string', 'max' => 50],
            [['no_rm'], 'exist', 'skipOnError' => true, 'targetClass' => TbPasien::className(), 'targetAttribute' => ['no_rm' => 'no_rm']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_rekam_medis' => 'Id Rekam Medis',
            'tgl_periksa' => 'Tgl Periksa',
            'no_rm' => 'No Rm',
            'anamnesa' => 'Anamnesa',
            'blk' => 'Blk',
            'diagnosa' => 'Diagnosa',
            'terapi' => 'Terapi',
            'askep' => 'Askep',
            'kie' => 'Kie',
        ];
    }

    /**
     * Gets query for [[NoRm]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoRm()
    {
        return $this->hasOne(TbPasien::className(), ['no_rm' => 'no_rm']);
    }
}
