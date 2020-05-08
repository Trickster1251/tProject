<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user_dislike}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%users}}`
 * - `{{%user_dislike}}`
 */
class m200503_061028_create_junction_table_for_users_and_user_dislike_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user_dislike}}', [
            'users_id' => $this->integer(),
            'user_dislike_id' => $this->integer(),
            'PRIMARY KEY(users_id, user_dislike_id)',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user_dislike}}');
    }
}
