<?php

namespace app\controllers;

use app\controllers\site\Index;
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
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
}
