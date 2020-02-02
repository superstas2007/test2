<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CatalogProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Товары';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catalog-products-index">
    <p>
        <?= Html::a('Добавить товар', ['create'], ['class' => 'btn btn-success btn-lg']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'price',
            [
                'attribute' => 'categoryTitle',
                'label' => 'Категории',
                'value' => 'category.title'
            ],
            [
                'attribute' => 'tagsTitles',
                'label' => 'Теги',
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
