<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%action}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%forms}}`
 */
class m210424_144447_create_action_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%action}}', [
            'id' => $this->primaryKey(),
            'id_form' => $this->integer(11),
            'Action' => $this->text(512),
        ]);

        // creates index for column `id_form`
        $this->createIndex(
            '{{%idx-action-id_form}}',
            '{{%action}}',
            'id_form'
        );

        // add foreign key for table `{{%forms}}`
        $this->addForeignKey(
            '{{%fk-action-id_form}}',
            '{{%action}}',
            'id_form',
            '{{%forms}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%forms}}`
        $this->dropForeignKey(
            '{{%fk-action-id_form}}',
            '{{%action}}'
        );

        // drops index for column `id_form`
        $this->dropIndex(
            '{{%idx-action-id_form}}',
            '{{%action}}'
        );

        $this->dropTable('{{%action}}');
    }
}
