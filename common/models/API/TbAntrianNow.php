<?php

namespace common\models\API;

use Yii;

/**
 * This is the model class for table "tb_antrian_now".
 *
 * @property int $id_antrian_now
 * @property string $tgl_antrian
 * @property int $loket_pendaftaran
 * @property int $poli_umum
 * @property int $poli_gigi
 * @property int $poli_tb_kusta
 * @property int $poli_kandungan
 * @property int $poli_kb
 * @property int $poli_mtbs
 * @property int $poli_jiwa
 * @property int $poli_lansia
 * @property int $imunisasi
 * @property int $laboratorium
 * @property int $pojok_gizi
 * @property int $klinik_sanitasi
 */
class TbAntrianNow extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_antrian_now';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_antrian', 'loket_pendaftaran', 'poli_umum', 'poli_gigi', 'poli_tb_kusta', 'poli_kandungan', 'poli_kb', 'poli_mtbs', 'poli_jiwa', 'poli_lansia', 'imunisasi', 'laboratorium', 'pojok_gizi', 'klinik_sanitasi'], 'required'],
            [['tgl_antrian'], 'safe'],
            [['loket_pendaftaran', 'poli_umum', 'poli_gigi', 'poli_tb_kusta', 'poli_kandungan', 'poli_kb', 'poli_mtbs', 'poli_jiwa', 'poli_lansia', 'imunisasi', 'laboratorium', 'pojok_gizi', 'klinik_sanitasi'], 'integer'],
            [['tgl_antrian'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_antrian_now' => 'Id Antrian Now',
            'tgl_antrian' => 'Tgl Antrian',
            'loket_pendaftaran' => 'Loket Pendaftaran',
            'poli_umum' => 'Poli Umum',
            'poli_gigi' => 'Poli Gigi',
            'poli_tb_kusta' => 'Poli Tb Kusta',
            'poli_kandungan' => 'Poli Kandungan',
            'poli_kb' => 'Poli Kb',
            'poli_mtbs' => 'Poli Mtbs',
            'poli_jiwa' => 'Poli Jiwa',
            'poli_lansia' => 'Poli Lansia',
            'imunisasi' => 'Imunisasi',
            'laboratorium' => 'Laboratorium',
            'pojok_gizi' => 'Pojok Gizi',
            'klinik_sanitasi' => 'Klinik Sanitasi',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\API\query\TbAntrianNowQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\API\query\TbAntrianNowQuery(get_called_class());
    }
}
