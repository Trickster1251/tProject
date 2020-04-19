<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m200406_184128_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('{{%users}}', 'age', $this->integer());
    }

    public function safeDown(){
        $this->alterColumn('{{%users}}', 'age', $this->text());
    }
}




