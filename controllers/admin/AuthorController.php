<?php

namespace app\controllers\admin;

use app\controllers\admin\actions\authors\Create;
use app\controllers\admin\actions\authors\Delete;
use app\controllers\admin\actions\authors\Index;
use app\controllers\admin\actions\authors\Update;
use app\controllers\admin\actions\authors\View;

/**
 * Class AuthorController
 * @package app\controllers\admin
 */
class AuthorController extends AdminController
{
    public function getViewPath()
    {
        return '@app/views/admin/authors';
    }

    public function actions()
    {
        return [
            'index'  => Index::class,
            'create' => Create::class,
            'update' => Update::class,
            'delete' => Delete::class,
            'view' => View::class,
        ];
    }
}