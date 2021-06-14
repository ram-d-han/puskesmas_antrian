<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tb_pasien".
 *
 * @property int $no_rm
 * @property string $nama_pasien
 * @property string $nama_kk
 * @property string $hub_keluarga
 * @property string $jenis_pasien
 * @property int $no_bpjs
 * @property string $tgl_lahir
 * @property int $umur
 * @property string $jenis_kelamin
 * @property string $alamat
 * @property string $no_index
 * @property string $pendidikan
 * @property string $pekerjaan
 * @property string $agama
 * @property string $status_pernikahan
 * @property string $telepon
 * @property string $tgl_masuk
 * @property string $tgl_akhir
 * @property string $token
 *
 * @property TbAntrianLoket[] $tbAntrianLokets
 * @property TbAntrianPoli[] $tbAntrianPolis
 * @property TbRekamMedis[] $tbRekamMedis
 */
class TbPasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pasien', 'nama_kk', 'hub_keluarga', 'jenis_pasien', 'no_bpjs', 'tgl_lahir', 'umur', 'jenis_kelamin', 'alamat', 'no_index', 'pendidikan', 'pekerjaan', 'agama', 'status_pernikahan', 'telepon', 'tgl_masuk', 'tgl_akhir', 'token'], 'required'],
            [['no_bpjs', 'umur'], 'integer'],
            [['tgl_lahir', 'tgl_masuk', 'tgl_akhir'], 'safe'],
            [['nama_pasien', 'nama_kk', 'alamat'], 'string', 'max' => 50],
            [['hub_keluarga', 'jenis_pasien', 'pendidikan', 'agama', 'status_pernikahan'], 'string', 'max' => 20],
            [['jenis_kelamin'], 'string', 'max' => 10],
            [['no_index', 'telepon'], 'string', 'max' => 15],
            [['pekerjaan'], 'string', 'max' => 25],
            [['token'], 'string', 'max' => 200],
            [['no_bpjs'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rm' => 'No Rm',
            'nama_pasien' => 'Nama Pasien',
            'nama_kk' => 'Nama Kk',
            'hub_keluarga' => 'Hub Keluarga',
            'jenis_pasien' => 'Jenis Pasien',
            'no_bpjs' => 'No Bpjs',
            'tgl_lahir' => 'Tgl Lahir',
            'umur' => 'Umur',
            'jenis_kelamin' => 'Jenis Kelamin',
            'alamat' => 'Alamat',
            'no_index' => 'No Index',
            'pendidikan' => 'Pendidikan',
            'pekerjaan' => 'Pekerjaan',
            'agama' => 'Agama',
            'status_pernikahan' => 'Status Pernikahan',
            'telepon' => 'Telepon',
            'tgl_masuk' => 'Tgl Masuk',
            'tgl_akhir' => 'Tgl Akhir',
            'token' => 'Token',
        ];
    }

    /**
     * Gets query for [[TbAntrianLokets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTbAntrianLokets()
    {
        return $this->hasMany(TbAntrianLoket::className(), ['no_rm' => 'no_rm']);
    }

    /**
     * Gets query for [[TbAntrianPolis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTbAntrianPolis()
    {
        return $this->hasMany(TbAntrianPoli::className(), ['no_rm' => 'no_rm']);
    }

    /**
     * Gets query for [[TbRekamMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTbRekamMedis()
    {
        return $this->hasMany(TbRekamMedis::className(), ['no_rm' => 'no_rm']);
    }
}
