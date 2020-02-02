<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Категории товаров';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catalog-categories-index">
    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success btn-lg']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'title',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
