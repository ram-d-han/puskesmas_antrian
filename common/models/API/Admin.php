<?php

namespace common\models\API;

use Yii;

/**
 * This is the model class for table "admin".
 *
 * @property int $id_admin
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string|null $password_reset_token
 * @property string $email
 * @property string $nama_admin
 * @property string $hak_akses
 * @property string $last_login
 * @property int $status
 * @property string|null $verification_token
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'admin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'email', 'nama_admin', 'hak_akses', 'last_login'], 'required'],
            [['last_login'], 'safe'],
            [['status'], 'integer'],
            [['username', 'password_hash', 'password_reset_token', 'email', 'verification_token'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['nama_admin'], 'string', 'max' => 50],
            [['hak_akses'], 'string', 'max' => 20],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['nama_admin'], 'unique'],
            [['password_reset_token'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_admin' => 'Id Admin',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'nama_admin' => 'Nama Admin',
            'hak_akses' => 'Hak Akses',
            'last_login' => 'Last Login',
            'status' => 'Status',
            'verification_token' => 'Verification Token',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\API\query\AdminQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\API\query\AdminQuery(get_called_class());
    }
}
