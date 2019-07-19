<?php

namespace app\controllers\site;

use app\models\Post;
use yii\base\Action;
use yii\data\Pagination;

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
        $query = Post::find();
        $pages = new Pagination([
            'totalCount' => $query->count(),
            'pageSize' => 4,
            'forcePageParam' => false,
            'pageSizeParam' => false
        ]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->controller->render('index', [
            'models' => $models,
            'pages' => $pages,
        ]);
    }
}