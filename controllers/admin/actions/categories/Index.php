<?php

namespace app\controllers\admin\actions\categories;

use app\models\Category;
use yii\base\Action;
use yii\data\ActiveDataProvider;

/**
 * Class Index
 * @package app\controllers\admin\actions\categories
 */
class Index extends Action
{
    /**
     * @return string
     */
    public function run()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Category::find(),
        ]);

        return $this->controller->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
}