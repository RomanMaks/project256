<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Авторы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="author-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить автора', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => yii\grid\SerialColumn::class],

            'id',
            'last_name',
            'first_name',
            'middle_name',

            [
                'class' => yii\grid\ActionColumn::class,
                'template' => '{update} {delete} {view}',
            ],
        ],
    ]); ?>
</div>