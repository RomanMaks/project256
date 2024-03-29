<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Посты';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить пост', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => yii\grid\SerialColumn::class],

            'id',
            'title',
            'short_name',
            [
                'attribute' => 'author_id',
                'value' => 'author.last_name',
                'label' => 'Автор'
            ],
            [
                'attribute' => 'category_id',
                'value' => 'category.name',
                'label' => 'Категория'
            ],
            'created_at',
            'updated_at',

            ['class' => yii\grid\ActionColumn::class],
        ],
    ]); ?>
</div>