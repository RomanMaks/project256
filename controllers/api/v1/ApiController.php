<?php

namespace app\controllers\api\v1;

use yii\filters\VerbFilter;
use yii\rest\Controller;
use yii\web\Response;

/**
 * Class ApiController
 * @package app\controllers\api\v1
 */
class ApiController extends Controller
{
    protected static $methods = ['*' => ['GET']];

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => static::$methods,
            ],
        ];
    }

    public function afterAction($action, $result)
    {
        header('Time-Zone: ' . (new \DateTime())->format(DATE_ISO8601));
        \Yii::$app->response->format = Response::FORMAT_JSON;
        return parent::afterAction($action, $result);
    }
}