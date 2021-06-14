<?php

use yii\db\Migration;

class m130524_201442_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%admin}}', [
            'id_admin' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),
            'nama_admin' => $this->string(50)->notNull(),
            'hak_akses' => $this->string(20)->notNull(),
            'last_login' => $this->datetime()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%admin}}');
    }
}
