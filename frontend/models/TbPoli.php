<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tb_poli".
 *
 * @property int $id_poli
 * @property string $nama_poli
 * @property string $url_poli
 *
 * @property TbAntrianLoket[] $tbAntrianLokets
 * @property TbAntrianPoli[] $tbAntrianPolis
 */
class TbPoli extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_poli';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_poli', 'url_poli'], 'required'],
            [['nama_poli'], 'string', 'max' => 25],
            [['url_poli'], 'string', 'max' => 20],
            [['nama_poli'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_poli' => 'Id Poli',
            'nama_poli' => 'Nama Poli',
            'url_poli' => 'Url Poli',
        ];
    }

    /**
     * Gets query for [[TbAntrianLokets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTbAntrianLokets()
    {
        return $this->hasMany(TbAntrianLoket::className(), ['poli_tujuan' => 'nama_poli']);
    }

    /**
     * Gets query for [[TbAntrianPolis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTbAntrianPolis()
    {
        return $this->hasMany(TbAntrianPoli::className(), ['poli_tujuan' => 'nama_poli']);
    }
}
