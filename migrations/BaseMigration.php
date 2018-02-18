<?php
namespace app\migrations;

use yii\db\Migration;

class BaseMigration extends Migration
{

    protected function getTableOptions()
    {
        return 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
    }

}
