<?php

use yii\db\Migration;

/**
 * Class m200202_102723_catalog_products_tags
 */
class m200202_102723_catalog_products_tags extends Migration
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

        $this->createTable('{{%catalog_products_tags}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->defaultValue(null),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%catalog_products_tags}}');
    }

}
