<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CatalogProducts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="catalog-products-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'category_id')->listBox(
        $model->getListCategories(),
        [
            'prompt' => '--- Выберите ---',
        ])
    ?>

    <?= $form->field($model, 'tags')->dropDownList(
        $model->getListTags(),
        [
            'class' => 'form-control',
            'multiple' => true,
        ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success btn-lg']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
