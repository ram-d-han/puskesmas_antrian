<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tb_daftar_kategori".
 *
 * @property int $id_daftar_kategori
 * @property int $id_kategori
 * @property string $detail_kategori
 *
 * @property TbKategori $kategori
 */
class TbDaftarKategori extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_daftar_kategori';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kategori', 'detail_kategori'], 'required'],
            [['id_kategori'], 'integer'],
            [['detail_kategori'], 'string', 'max' => 25],
            [['detail_kategori'], 'unique'],
            [['id_kategori'], 'exist', 'skipOnError' => true, 'targetClass' => TbKategori::className(), 'targetAttribute' => ['id_kategori' => 'id_kategori']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_daftar_kategori' => 'Id Daftar Kategori',
            'id_kategori' => 'Id Kategori',
            'detail_kategori' => 'Detail Kategori',
        ];
    }

    /**
     * Gets query for [[Kategori]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKategori()
    {
        return $this->hasOne(TbKategori::className(), ['id_kategori' => 'id_kategori']);
    }
}
