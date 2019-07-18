<?php

use yiister\gentelella\widgets\Panel;

$this->title = 'Главная страница';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-xs-12">
        <?php
        Panel::begin(
            [
                'header' => $this->title,
                'icon' => 'home',
            ]
        )
        ?>

        <div class="jumbotron">
            <h1>Project 256</h1>
            <p>Админочка</p>
            <p>Инфа о модулях верстки админки ⟶ <a href="http://gentelella.yiister.ru/">прочитать...</a></p>
        </div>

        <?php Panel::end() ?>
    </div>
</div>