<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CatalogProducts;

/**
 * CatalogProductsSearch represents the model behind the search form of `app\models\CatalogProducts`.
 */
class CatalogProductsSearch extends CatalogProducts
{
    public $categoryTitle;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'price', 'category_id'], 'integer'],
            [['title', 'categoryTitle'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = CatalogProducts::find();
        $query->joinWith(['category']);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->sort->attributes['categoryTitle'] = [
            'asc' => [CatalogCategories::tableName() . '.title' => SORT_ASC],
            'desc' => [CatalogCategories::tableName() . '.title' => SORT_DESC],
        ];

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'price' => $this->price,
            'category_id' => $this->category_id,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', CatalogCategories::tableName() . '.title', $this->categoryTitle]);

        return $dataProvider;
    }
}
