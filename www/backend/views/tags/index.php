<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Теги';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catalog-products-tags-index">
    <p>
        <?= Html::a('Новый тег', ['create'], ['class' => 'btn btn-success btn-lg']) ?>
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
