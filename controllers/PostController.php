<?php

namespace app\controllers;

use app\controllers\site\View;

/**
 * Class PostController
 * @package app\controllers
 */
class PostController extends SiteController
{
    public function getViewPath()
    {
        return '@app/views/site';
    }

    public function actions()
    {
        return [
            'view' => View::class,
        ];
    }
}