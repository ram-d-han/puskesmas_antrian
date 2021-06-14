<?php
namespace common\models;

use Yii;
use yii\base\Model;

/**
 * Login form
 */
class LoginPasien extends Model
{
    public $nama_pasien;
    public $no_rm;
    public $poli_tujuan;
    public $rememberMe = true;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['nama_pasien', 'no_rm', 'poli_tujuan'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
        ];
    }
}

?>