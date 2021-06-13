<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%inputs}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%forms}}`
 */
class m210424_095506_create_inputs_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%inputs}}', [
            'id' => $this->primaryKey(),
            'id_form' => $this->integer(11),
            'Label' => $this->string(512),
            'Required' => $this->boolean(),
        ]);

        // creates index for column `id_form`
        $this->createIndex(
            '{{%idx-inputs-id_form}}',
            '{{%inputs}}',
            'id_form'
        );

        // add foreign key for table `{{%forms}}`
        $this->addForeignKey(
            '{{%fk-inputs-id_form}}',
            '{{%inputs}}',
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
            '{{%fk-inputs-id_form}}',
            '{{%inputs}}'
        );

        // drops index for column `id_form`
        $this->dropIndex(
            '{{%idx-inputs-id_form}}',
            '{{%inputs}}'
        );

        $this->dropTable('{{%inputs}}');
    }
}
