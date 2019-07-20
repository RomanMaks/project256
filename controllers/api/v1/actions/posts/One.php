<?php

namespace app\controllers\api\v1\actions\posts;

use app\models\Post;
use yii\rest\Action;
use yii\web\NotFoundHttpException;

/**
 * Действие вернет один единственный пост
 *
 * Class One
 * @package app\controllers\api\v1\actions\posts
 */
class One extends Action
{
    public $modelClass = 'app\models\Post';

    /**
     * @param int $id
     * @return array
     * @throws NotFoundHttpException
     */
    public function run(int $id)
    {
        $post = Post::findOne(['id' => $id]);

        if (empty($post)) {
            throw new NotFoundHttpException();
        }

        return ['data' => $post];
    }
}