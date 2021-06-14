<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tb_info".
 *
 * @property int $id_info
 * @property int $id_kategori
 * @property string $judul
 * @property string $detail1
 * @property string $detail2
 * @property string $gambar
 *
 * @property TbInfoKategori $kategori
 */
class TbInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kategori', 'judul', 'detail1', 'detail2', 'gambar'], 'required'],
            [['id_kategori'], 'integer'],
            [['judul'], 'string', 'max' => 50],
            [['detail1', 'detail2'], 'string', 'max' => 600],
            [['gambar'], 'string', 'max' => 100],
            [['id_kategori'], 'exist', 'skipOnError' => true, 'targetClass' => TbInfoKategori::className(), 'targetAttribute' => ['id_kategori' => 'id_info_kategori']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_info' => 'Id Info',
            'id_kategori' => 'Id Kategori',
            'judul' => 'Judul',
            'detail1' => 'Detail1',
            'detail2' => 'Detail2',
            'gambar' => 'Gambar',
        ];
    }

    /**
     * Gets query for [[Kategori]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKategori()
    {
        return $this->hasOne(TbInfoKategori::className(), ['id_info_kategori' => 'id_kategori']);
    }
}
