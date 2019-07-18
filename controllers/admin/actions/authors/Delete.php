<?php

namespace app\controllers\admin\actions\authors;

use app\models\Author;
use yii\base\Action;
use yii\db\StaleObjectException;
use yii\web\NotFoundHttpException;

/**
 * Class Delete
 * @package app\controllers\admin\actions\authors
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
        $model = Author::findOne($id);

        if ($model === null) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }

        if ($model->primaryKey === \Yii::$app->user->id) {
            \Yii::$app->session->setFlash('error', 'Вы не можете удалить самого себя');
        } else {
            $model->delete();
        }

        return $this->controller->redirect(['index']);
    }
}