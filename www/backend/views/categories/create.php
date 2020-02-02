<?php

/* @var $this yii\web\View */
/* @var $model app\models\CatalogCategories */

$this->title = 'Создание категории';
$this->params['breadcrumbs'][] = ['label' => 'Категории товаров', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catalog-categories-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
