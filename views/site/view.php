<?php

use yii\widgets\DetailView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Post */

$this->title = $model->title;
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="post-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?=
        DetailView::widget([
            'model' => $model,
            'attributes' => [
                'title',
                'slug',
                'short_name',
                'post:ntext',
            ],
        ]);
    ?>
</div>