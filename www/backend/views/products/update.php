<?php

/* @var $this yii\web\View */
/* @var $model app\models\CatalogProducts */

$this->title = 'Обновление товара: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Товары', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновление';
?>
<div class="catalog-products-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
