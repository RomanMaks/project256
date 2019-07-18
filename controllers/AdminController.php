<?php

namespace app\controllers;

use app\controllers\admin\AdminController as AdminPanel;

/**
 * Class AdminController
 * @package app\controllers
 */
class AdminController extends AdminPanel
{
    public function actionIndex(): string
    {
        \Yii::$app->setHomeUrl('/admin');

        return $this->render('index');
    }
}