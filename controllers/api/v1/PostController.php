<?php

namespace app\controllers\api\v1;

use app\controllers\api\v1\actions\posts\All;
use app\controllers\api\v1\actions\posts\One;
use app\controllers\api\v1\actions\posts\Update;
use app\controllers\api\v1\actions\posts\Delete;

/**
 * Class PostController
 * @package app\controllers\api\v1
 */
class PostController extends ApiController
{
    protected static $methods = [
        'one' => ['GET'],
        'update' => ['POST'],
    ];

    public function actions()
    {
        return [
            'all' => All::class,
            'one' => One::class,
            'delete' => Delete::class,
            'update' => Update::class,
        ];
    }
}