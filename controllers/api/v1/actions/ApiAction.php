<?php

namespace app\controllers\api\v1\actions;

use yii\base\InvalidConfigException;
use yii\rest\Action;
use yii\web\Response;

/**
 * Class ApiAction
 * @package app\controllers\api\v1\actions
 */
class ApiAction extends Action
{
    /**
     * @param array $params
     * @return mixed
     * @throws InvalidConfigException
     */
    public function runWithParams($params)
    {
        \Yii::$app->response->format = Response::FORMAT_JSON;
        \Yii::$app->response->charset = 'UTF-8';

        return parent::runWithParams($params);
    }
}