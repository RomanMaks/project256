<?php

namespace app\controllers\admin;

use yii\web\BadRequestHttpException;
use yii\web\Controller;

/**
 * Class AdminController
 * @package app\controllers\admin
 */
class AdminController extends Controller
{
    public $layout = 'admin';

    /**
     * @param $action
     * @return bool
     * @throws BadRequestHttpException
     */
    public function beforeAction($action): bool
    {
        \Yii::$app->setHomeUrl('/admin');

        return parent::beforeAction($action);
    }
}