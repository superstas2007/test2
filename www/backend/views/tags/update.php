<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CatalogProductsTags */

$this->title = 'Редактирование тега: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'теги', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="catalog-products-tags-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
