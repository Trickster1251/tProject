<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users_like}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%users}}`
 * - `{{%like}}`
 */
class m200329_144637_create_junction_table_for_users_and_like_tables extends Migration
{

    public function safeUp()
    {
        $this->createTable('{{%users_like}}', [
            'users_id' => $this->integer(),
            'like_id' => $this->integer(),
            'reason' => $this->text(),
            'PRIMARY KEY(users_id, like_id)',
        ]);

    }

    public function safeDown()
    {
        $this->dropTable('{{%users_like}}');
    }
}
