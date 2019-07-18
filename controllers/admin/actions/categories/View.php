<?php

namespace app\controllers\admin\actions\categories;

use app\models\Category;
use yii\base\Action;
use yii\web\NotFoundHttpException;

/**
 * Class View
 * @package app\controllers\admin\actions\categories
 */
class View extends Action
{
    /**
     * @param int $id
     * @return string
     * @throws NotFoundHttpException
     */
    public function run(int $id)
    {
        $model = Category::findOne($id);

        if ($model === null) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }

        return $this->controller->render('view', [
            'model' => $model,
        ]);
    }
}