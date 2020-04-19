<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users_like}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%users}}`
 * - `{{%like}}`
 */
class m200406_192249_create_junction_table_for_users_and_like_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
       $this->renameColumn('{{%users_like}}', 'like_id', 'user_like_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->renameColumn('{{%users_like}}', 'user_like_id', 'like_id');
    }
}
