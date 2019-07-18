<?php

namespace app\controllers\admin\actions\categories;

use app\models\Category;
use yii\base\Action;
use yii\db\StaleObjectException;
use yii\web\NotFoundHttpException;

/**
 * Class Delete
 * @package app\controllers\admin\actions\categories
 */
class Delete extends Action
{
    /**
     * @param int $id
     * @return mixed
     * @throws NotFoundHttpException
     * @throws \Throwable
     * @throws StaleObjectException
     */
    public function run(int $id)
    {
        $model = Category::findOne($id);

        if ($model === null) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }

        $model->delete();

        return $this->controller->redirect(['index']);
    }
}