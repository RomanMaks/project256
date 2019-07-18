<?php

namespace app\controllers\admin;

use app\controllers\admin\actions\posts\Create;
use app\controllers\admin\actions\posts\Delete;
use app\controllers\admin\actions\posts\Index;
use app\controllers\admin\actions\posts\Update;

/**
 * Class PostController
 * @package app\controllers\admin
 */
class PostController extends AdminController
{
    public function getViewPath()
    {
        return '@app/views/admin/posts';
    }

    public function actions()
    {
        return [
            'index'  => Index::class,
            'create' => Create::class,
            'update' => Update::class,
            'delete' => Delete::class,
        ];
    }
}