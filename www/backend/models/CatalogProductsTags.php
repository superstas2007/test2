<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "catalog_products_tags".
 *
 * @property int $id
 * @property string|null $title
 *
 * @property CatalogProducts[] $catalogProducts
 */
class CatalogProductsTags extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'catalog_products_tags';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
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

}
