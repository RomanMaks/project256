<?php

namespace app\controllers\site;

use app\models\Post;
use yii\base\Action;

/**
 * Class Index
 * @package app\controllers\site
 */
class Index extends Action
{
    /**
     * @return string
     */
    public function run()
    {
        $models = Post::find()->all();

        return $this->controller->render('index', [
            'models' => $models,
        ]);
    }
}