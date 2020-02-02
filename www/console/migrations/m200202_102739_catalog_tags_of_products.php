<?php

use yii\db\Migration;

/**
 * Class m200202_102739_catalog_tags_of_products
 */
class m200202_102739_catalog_tags_of_products extends Migration
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

        $this->createTable('{{%catalog_tags_of_products}}', [
            'id' => $this->primaryKey(),
            'tag_id' => $this->integer()->defaultValue(null),
            'product_id' => $this->integer()->defaultValue(null),
        ], $tableOptions);

        $this->addForeignKey(
            'FK_catalog_tags_of_products_product_id',
            'catalog_tags_of_products',
            'product_id',
            'catalog_products',
            'id',
            'CASCADE',
            'SET NULL'
        );

        $this->addForeignKey(
            'FK_catalog_tags_of_products_tag_id',
            'catalog_tags_of_products',
            'tag_id',
            'catalog_products_tags',
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
        $this->dropForeignKey('FK_catalog_tags_of_products_product_id', 'catalog_tags_of_products');
        $this->dropForeignKey('FK_catalog_tags_of_products_tag_id', 'catalog_tags_of_products');
        $this->dropTable('{{%catalog_tags_of_products}}');
    }

}
