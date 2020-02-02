<?php

use yii\db\Migration;

/**
 * Class m200202_102708_catalog_products
 */
class m200202_102708_catalog_products extends Migration
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

        $this->createTable('{{%catalog_products}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->defaultValue(null),
            'price' => $this->integer()->notNull()->defaultValue(0),
            'category_id' => $this->integer()->defaultValue(null),
        ], $tableOptions);

        $this->addForeignKey(
            'FK_catalog_products_category_id',
            'catalog_products',
            'category_id',
            'catalog_categories',
            'id',
            'CASCADE',
            'SET NULL'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('FK_catalog_products_category_id', 'catalog_products');
        $this->dropTable('{{%catalog_products}}');
    }

}
