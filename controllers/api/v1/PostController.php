<?php

namespace app\controllers\api\v1;

use app\controllers\api\v1\actions\posts\Index;

/**
 * Class PostController
 * @package app\controllers\api\v1
 */
class PostController extends ApiController
{
    protected static $methods = [
        'index' => ['GET'],
    ];

    public function actions()
    {
        return [
            'index' => Index::class,
        ];
    }
}