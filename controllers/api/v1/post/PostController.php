<?php

namespace app\controllers\api\v1\post;

use app\models\Post;
use yii\rest\ActiveController;

/**
 * Class PostController
 * @package app\controllers\api\v1\post
 */
class PostController extends ActiveController
{
    public $modelClass = Post::class;
}