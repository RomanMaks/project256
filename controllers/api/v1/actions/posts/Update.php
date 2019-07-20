<?php

namespace app\controllers\api\v1\actions\posts;

use app\controllers\api\v1\actions\ApiAction;
use app\dto\v1\posts\update\RequestDto;
use app\dto\v1\posts\update\ResponseDto;
use app\models\Post;
use yii\web\BadRequestHttpException;
use yii\web\NotFoundHttpException;
use yii\web\ServerErrorHttpException;

/**
 * Действие обновит пост
 *
 * Class Update
 * @package app\controllers\api\v1\actions\posts
 */
class Update extends ApiAction
{
    public $modelClass = 'app\models\Post';

    /**
     * @throws BadRequestHttpException
     * @throws NotFoundHttpException
     * @throws ServerErrorHttpException
     */
    public function run()
    {
        try {
            $request = RequestDto::createFromRequest();
        } catch (\Throwable $exception) {
            throw new BadRequestHttpException();
        }

        $post = Post::findOne(['id' => $request->id]);

        if (empty($post)) {
            throw new NotFoundHttpException();
        }

        $post->setAttributes($request->toArray());

        try {
            $post->update();
        } catch (\Throwable $exception) {
            throw new ServerErrorHttpException();
        }

        return ['data' => new ResponseDto()];
    }
}