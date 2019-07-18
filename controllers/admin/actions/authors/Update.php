<?php

namespace app\controllers\admin\actions\authors;

use app\models\Author;
use yii\base\Action;
use yii\web\NotFoundHttpException;
use yii\web\Response;

/**
 * Class Update
 * @package app\controllers\admin\actions\authors
 */
class Update extends Action
{
    /**
     * @param int $id
     * @return string|Response
     * @throws NotFoundHttpException
     */
    public function run(int $id)
    {
        $model = Author::findOne($id);

        if ($model === null) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }

        if ($model->load(\Yii::$app->request->post()) && $model->save()) {
            return $this->controller
                ->redirect([
                    'view',
                    'id' => $model->id
                ]);
        }

        return $this->controller->render('update', [
            'model' => $model,
        ]);
    }
}