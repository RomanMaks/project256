<?php

namespace app\controllers\admin\actions\categories;

use app\models\Category;
use yii\base\Action;
use yii\web\Response;

/**
 * Class Create
 * @package app\controllers\admin\actions\categories
 */
class Create extends Action
{
    /**
     * @return string|Response
     */
    public function run()
    {
        $model = new Category();

        if ($model->load(\Yii::$app->request->post()) && $model->save()) {
            return $this->controller
                ->redirect([
                    'view',
                    'id' => $model->id
                ]);
        }

        return $this->controller->render('create', [
            'model' => $model,
        ]);
    }
}