<?php

namespace app\controllers;

use app\controllers\site\Index;
use app\controllers\site\View;
use yii\web\Controller;

class SiteController extends Controller
{
    public $layout = 'main';

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'index' => Index::class,
            'view'  => View::class,
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
}
