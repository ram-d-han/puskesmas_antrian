<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tb_kategori".
 *
 * @property int $id_kategori
 * @property string $nama_kategori
 *
 * @property TbDaftarKategori[] $tbDaftarKategoris
 */
class TbKategori extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_kategori';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_kategori'], 'required'],
            [['nama_kategori'], 'string', 'max' => 25],
            [['nama_kategori'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kategori' => 'Id Kategori',
            'nama_kategori' => 'Nama Kategori',
        ];
    }

    /**
     * Gets query for [[TbDaftarKategoris]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTbDaftarKategoris()
    {
        return $this->hasMany(TbDaftarKategori::className(), ['id_kategori' => 'id_kategori']);
    }
}
