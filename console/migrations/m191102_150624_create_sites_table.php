<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%sites}}`.
 */
class m191102_150624_create_sites_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%sites}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'photo' => $this->string(),
            'status' => $this->integer(),
            'views' => $this->integer(),
            'is_taxis' => $this->boolean(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
            'parsed_at' => $this->integer(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%sites}}');
    }
}
