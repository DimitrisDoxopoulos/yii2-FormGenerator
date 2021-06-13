<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%forms}}`.
 */
class m210424_094747_create_forms_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%forms}}', [
            'id' => $this->primaryKey(),
            'form_name' => $this->string(512),
            'active' => $this->boolean(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%forms}}');
    }
}
