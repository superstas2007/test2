<?php

use yii\widgets\Breadcrumbs;
use dmstr\widgets\Alert;

?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="text-dark"><?= $this->title ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <?= Breadcrumbs::widget([
                        'itemTemplate' => '<li class="breadcrumb-item">{link}</li>',
                        'homeLink' => [
                            'label' => 'Главная',
                            'url' => Yii::$app->homeUrl,
                            'title' => 'Главная',
                        ],
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        'options' => ['class' => 'breadcrumb float-sm-right', 'style' => ''],
                    ]);
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <?= Alert::widget() ?>
        <?= $content ?>
    </section>
</div>


