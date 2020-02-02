<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "catalog_products".
 *
 * @property int $id
 * @property string|null $title
 * @property int $price
 * @property int|null $category_id
 *
 * @property CatalogCategories $category
 * @property CatalogProductsTags $tag
 */
class CatalogProducts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'catalog_products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['price', 'category_id'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [
                ['category_id'],
                'exist',
                'skipOnError' => true,
                'targetClass' => CatalogCategories::className(),
                'targetAttribute' => ['category_id' => 'id']
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
            'title' => 'Название',
            'price' => 'Цена',
            'category_id' => 'Категория',
            'tags' => 'Теги'
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(CatalogCategories::className(), ['id' => 'category_id']);
    }

    public function getListCategories()
    {
        return ArrayHelper::map(CatalogCategories::find()->all(), 'id', 'title');
    }

    /**
     * Gets query for [[Tags]]
     * @return $this
     * @throws \yii\base\InvalidConfigException
     */
    public function getTags()
    {
        return $this->hasMany(CatalogProductsTags::className(), ['id' => 'tag_id'])
            ->viaTable(CatalogTagsOfProducts::tableName(), ['product_id' => 'id']);
    }

    /**
     * Tags titles
     * @return string
     * @throws \yii\base\InvalidConfigException
     */
    public function getTagsTitles()
    {
        $tags = $this->getTags()->addSelect('title')->column();

        return implode(',', $tags);
    }

    /**
     * Tags list
     * @return array
     */
    public function getListTags()
    {
        return ArrayHelper::map(CatalogProductsTags::find()->all(), 'id', 'title');
    }

}
