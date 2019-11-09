<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%tags_and_sites}}`.
 */
class m191105_143909_add_column_to_tags_and_sites_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('tags_and_sites', 'id', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('tags_and_sites', 'id');

    }
}
