<?php

namespace app\controllers\admin;

use app\controllers\admin\actions\categories\Create;
use app\controllers\admin\actions\categories\Delete;
use app\controllers\admin\actions\categories\Index;
use app\controllers\admin\actions\categories\Update;
use app\controllers\admin\actions\categories\View;

/**
 * Class CategoryController
 * @package app\controllers\admin
 */
class CategoryController extends AdminController
{
    public function getViewPath()
    {
        return '@app/views/admin/categories';
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