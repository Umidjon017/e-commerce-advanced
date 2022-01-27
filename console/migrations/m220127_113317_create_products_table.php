<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%products}}`.
 */
class m220127_113317_create_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%products}}', [
            'id' => $this->primaryKey(),
            'user_email' => $this->string(100),
            'name' => $this->string(255),
            'description' => $this->text(),
            'ikey' => $this->string(50),
            'amount' => $this->string(50),
            'quantity' => $this->integer()->defaultValue(1),
            'availability' => $this->string(100),
            'prod_condition' => $this->string(100),
            'brand' => $this->string(100),
            'stock' => $this->integer(),
            'status' => $this->integer(),
            'created_at' => $this->integer()->notNull(),
            'created_by' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'updated_by' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%products}}');
    }
}
