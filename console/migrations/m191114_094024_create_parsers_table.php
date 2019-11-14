<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%parsers}}`.
 */
class m191114_094024_create_parsers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%parsers}}', [
            'id' => $this->primaryKey(),
            'domain' => $this->string(),
            'description' => $this->string(),
            'registrar' => $this->string(),
            'status' => $this->integer(),
            'created_at' => $this->integer(),
            'expires_at' => $this->integer(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%parsers}}');
    }
}
