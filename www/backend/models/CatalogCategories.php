<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "catalog_categories".
 *
 * @property int $id
 * @property string|null $title
 *
 * @property CatalogProducts[] $catalogProducts
 */
class CatalogCategories extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'catalog_categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title'], 'string', 'max' => 255],
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
        ];
    }

    /**
     * Gets query for [[CatalogProducts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCatalogProducts()
    {
        return $this->hasMany(CatalogProducts::className(), ['category_id' => 'id']);
    }

    public static function getTitleById($id)
    {
        return static::find()->select('title')->andWhere(['id' => $id])->scalar();
    }
}
