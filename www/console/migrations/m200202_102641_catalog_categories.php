<?php

use yii\db\Migration;

/**
 * Class m200202_102641_catalog_categories
 */
class m200202_102641_catalog_categories extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%catalog_categories}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->defaultValue(null),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%catalog_categories}}');
    }
}
