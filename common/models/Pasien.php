<?php
namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class Pasien extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tb_pasien}}';
    }

    public static function findByNamaPasien($nama_pasien)
    {
        return static::findOne(['nama_pasien' => $nama_pasien]);
    }
}
