<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "catalog_tags_of_products".
 *
 * @property int $id
 * @property int|null $tag_id
 * @property int|null $product_id
 *
 * @property CatalogProducts $product
 * @property CatalogProductsTags $tag
 */
class CatalogTagsOfProducts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'catalog_tags_of_products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tag_id', 'product_id'], 'integer'],
            [
                ['product_id'],
                'exist',
                'skipOnError' => true,
                'targetClass' => CatalogProducts::className(),
                'targetAttribute' => ['product_id' => 'id']
            ],
            [
                ['tag_id'],
                'exist',
                'skipOnError' => true,
                'targetClass' => CatalogProductsTags::className(),
                'targetAttribute' => ['tag_id' => 'id']
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tag_id' => 'Tag ID',
            'product_id' => 'Product ID',
        ];
    }

    /**
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(CatalogProducts::className(), ['id' => 'product_id']);
    }

    /**
     * Gets query for [[Tag]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTag()
    {
        return $this->hasOne(CatalogProductsTags::className(), ['id' => 'tag_id']);
    }
}
