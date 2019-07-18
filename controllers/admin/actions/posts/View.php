<?php

namespace app\controllers\admin\actions\posts;

use app\models\Post;
use yii\base\Action;
use yii\web\NotFoundHttpException;

/**
 * Class View
 * @package app\controllers\admin\actions\posts
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
        $model = Post::findOne($id);

        if ($model === null) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }

        return $this->controller->render('view', [
            'model' => $model,
        ]);
    }
}