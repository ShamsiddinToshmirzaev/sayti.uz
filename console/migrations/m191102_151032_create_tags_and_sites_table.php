<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tags_and_sites}}`.
 */
class m191102_151032_create_tags_and_sites_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%tags_and_sites}}', [
            'tag_id' => $this->integer()->notNull(),
            'site_id'=> $this->integer()->notNull(),
        ], $tableOptions);


        $this->createIndex('{{%idx-tags_id}}', '{{%tags_and_sites}}', 'tag_id');
        $this->addForeignKey('{{%fkey-tags_id}}', '{{%tags_and_sites}}', 'tag_id', '{{%tags}}', 'id', 'CASCADE', 'CASCADE');

        $this->createIndex('{{%idx-sites_id}}', '{{%tags_and_sites}}', 'site_id');
        $this->addForeignKey('{{%fkey-sites_id}}', '{{%tags_and_sites}}', 'site_id', '{{%sites}}', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tags_and_sites}}');
    }
}
