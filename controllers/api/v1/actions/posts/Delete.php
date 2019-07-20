<?php

namespace app\controllers\api\v1\actions\posts;

use app\dto\v1\posts\delete\ResponseDto;
use app\models\Post;
use yii\rest\Action;
use yii\web\NotFoundHttpException;
use yii\web\ServerErrorHttpException;

/**
 * Действие удаляет пост
 *
 * Class Delete
 * @package app\controllers\api\v1\actions\posts
 */
class Delete extends Action
{
    public $modelClass = 'app\models\Post';

    /**
     * @param int $id
     * @return array
     * @throws NotFoundHttpException
     * @throws ServerErrorHttpException
     */
    public function run(int $id)
    {
        $post = Post::findOne(['id' => $id]);

        if (empty($post)) {
            throw new NotFoundHttpException();
        }

        try {
            $post->delete();
        } catch (\Throwable $exception) {
            throw new ServerErrorHttpException();
        }

        return ['data' => new ResponseDto()];
    }
}