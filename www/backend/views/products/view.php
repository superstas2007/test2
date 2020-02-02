<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CatalogProducts */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Товары', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="catalog-products-view">

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary btn-lg']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger btn-lg',
            'data' => [
                'confirm' => 'Вы действительно хотите удалить данную запись?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <table id="w0" class="table table-striped table-bordered detail-view">
        <tbody>
        <tr>
            <th><?= $model->getAttributeLabel('id') ?></th>
            <td><?= $model->id ?></td>
        </tr>
        <tr>
            <th><?= $model->getAttributeLabel('title') ?></th>
            <td><?= $model->title ?></td>
        </tr>
        <tr>
            <th><?= $model->getAttributeLabel('price') ?></th>
            <td><?= $model->price ?></td>
        </tr>
        <tr>
            <th><?= $model->getAttributeLabel('category_id') ?></th>
            <td><?= $model->category->title ?></td>
        </tr>
        <tr>
            <th>Теги</th>
            <td>
                <?= $model->getTagsTitles() ?>
            </td>
        </tr>
        </tbody>
    </table>

</div>
