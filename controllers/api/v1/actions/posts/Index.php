<?php

namespace app\controllers\api\v1\actions\posts;

use app\models\Post;
use yii\rest\Action;

/**
 * Class Index
 * @package app\controllers\api\v1\actions\posts
 */
class Index extends Action
{
    public $modelClass = 'app\models\Post';

    public function run()
    {
        $posts = Post::find()->all();

        return [
            'data' => $posts
        ];
    }
}