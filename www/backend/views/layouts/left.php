<?php
$username = 'Имя пользователя';
$userStatus = 'Не в сети';
$iconStatus = 'text-danger';
if (!Yii::$app->user->isGuest) {
    $username = Yii::$app->user->getIdentity()->username;
    $userStatus = 'В сети';
    $iconStatus = 'text-success';
}
?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= $username ?></p>
                <a href="#"><i class="fa fa-circle <?= $iconStatus ?>"></i> <?= $userStatus ?></a>
            </div>
        </div>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                'items' => [
                    ['label' => 'Главное меню', 'options' => ['class' => 'header']],
                    ['label' => 'Пользователи', 'url' => ['/users']],
                    ['label' => 'Категории товаров', 'url' => ['/categories']],
                    ['label' => 'Теги', 'url' => ['/tags']],
                    ['label' => 'Товары', 'url' => ['/products']],
                    ['label' => 'Выйти', 'url' => ['site/logout'], 'visible' => !Yii::$app->user->isGuest],
                ],
            ]
        ) ?>

    </section>

</aside>
