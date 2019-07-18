<?php

namespace app\controllers\admin\actions\posts;

use app\models\Post;
use yii\base\Action;
use yii\data\ActiveDataProvider;

/**
 * Class Index
 * @package app\controllers\admin\actions\posts
 */
class Index extends Action
{
    /**
     * @return string
     */
    public function run()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Post::find(),
        ]);

        return $this->controller->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
}