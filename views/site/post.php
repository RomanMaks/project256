<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Post */

$this->title = $model->title;
?>

<div class="post-view">

    <h2><?= Html::encode($this->title) ?></h2>

    <div class="row">
        <p><?= $model->post; ?></p>
    </div>
</div>