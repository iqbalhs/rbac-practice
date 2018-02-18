<?php

use app\migrations\BaseMigration;
use yii\db\Schema;

/**
 * Class m180213_003001_create_user_table
 */
class m180213_003001_create_user_table extends BaseMigration
{
    public function up()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string(64)->notNull(),
            'display_name' => $this->string(64)->notNull(),
            'email' => $this->string(255)->notNull(),

            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string(128)->notNull(),
            'password_reset_token' => $this->string(),

            'status' => Schema::TYPE_SMALLINT . ' NOT NULL DEFAULT 10',
            'created_at' => $this->dateTime()->notNull(),
            'updated_at' => $this->dateTime(),
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
