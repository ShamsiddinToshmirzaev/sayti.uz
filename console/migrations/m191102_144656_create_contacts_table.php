<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%contacts}}`.
 */
class m191102_144656_create_contacts_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%contacts}}', [
            'id' => $this->primaryKey(),
            'full_name' => $this->string(100),
            'email_phone' => $this->string(60),
            'message' => $this->text(),
            'created_at' => $this->integer(),
            'status' => $this->integer(3),
        ],$tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%contacts}}');
    }
}
