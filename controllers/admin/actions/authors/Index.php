<?php

namespace app\controllers\admin\actions\authors;

use app\models\Author;
use yii\base\Action;
use yii\data\ActiveDataProvider;

/**
 * Class Index
 * @package app\controllers\admin\actions\authors
 */
class Index extends Action
{
    /**
     * @return string
     */
    public function run()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Author::find(),
        ]);

        return $this->controller->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
}