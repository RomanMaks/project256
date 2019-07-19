<?php

use yii\web\View;
use app\models\Post;

/* @var View $this */
/* @var Post[] $posts*/

$this->title = 'Project 256';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <?php foreach ($posts as $post): ?>
                <div class="col-lg-4">
                    <h2><?= $post->title ?></h2>

                    <p><?= mb_strimwidth($post->post, 0, 100, '...', 'UTF-8'); ?></p>

                    <p><a class="btn btn-default" href="http://localhost:8080/post/<?= $post->id ?>">Прочитать &raquo;</a></p>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>
