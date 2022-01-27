<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%contact_form}}`.
 */
class m220127_062256_create_contact_form_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%contact_form}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100),
            'email' => $this->string(100),
            'subject' => $this->string(100),
            'body' => $this->text(),
            'created_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%contact_form}}');
    }
}
