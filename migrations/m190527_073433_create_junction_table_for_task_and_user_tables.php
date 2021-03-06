<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%task_user}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%task}}`
 * - `{{%user}}`
 */
class m190527_073433_create_junction_table_for_task_and_user_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%task_user}}', [
            'task_id' => $this->integer(),
            'user_id' => $this->integer(),
            'owner' => $this->boolean()->defaultValue(0),
            'shared' => $this->boolean()->defaultValue(0),
            'PRIMARY KEY(task_id, user_id)',
        ]);

        // creates index for column `task_id`
        $this->createIndex(
            '{{%idx-task_user-task_id}}',
            '{{%task_user}}',
            'task_id'
        );

        // add foreign key for table `{{%task}}`
        $this->addForeignKey(
            '{{%fk-task_user-task_id}}',
            '{{%task_user}}',
            'task_id',
            '{{%task}}',
            'id',
            'CASCADE'
        );

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-task_user-user_id}}',
            '{{%task_user}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-task_user-user_id}}',
            '{{%task_user}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%task}}`
        $this->dropForeignKey(
            '{{%fk-task_user-task_id}}',
            '{{%task_user}}'
        );

        // drops index for column `task_id`
        $this->dropIndex(
            '{{%idx-task_user-task_id}}',
            '{{%task_user}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-task_user-user_id}}',
            '{{%task_user}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-task_user-user_id}}',
            '{{%task_user}}'
        );

        $this->dropTable('{{%task_user}}');
    }
}
