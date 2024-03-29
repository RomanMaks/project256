<?php

namespace app\controllers\admin\actions\posts;

use app\models\Author;
use app\models\Category;
use app\models\Post;
use yii\base\Action;
use yii\web\Response;

/**
 * Class Create
 * @package app\controllers\admin\actions\posts
 */
class Create extends Action
{
    /**
     * @return string|Response
     */
    public function run()
    {
        $model = new Post();

        if ($model->load(\Yii::$app->request->post()) && $model->save()) {
            return $this->controller
                ->redirect([
                    'view',
                    'id' => $model->id
                ]);
        }

        $categories = Category::find()
            ->indexBy('id')
            ->select('name')
            ->column();

        $authors = Author::find()
            ->indexBy('id')
            ->select('last_name')
            ->column();

        return $this->controller->render('create', [
            'model' => $model,
            'categories' => $categories,
            'authors' => $authors,
        ]);
    }
}