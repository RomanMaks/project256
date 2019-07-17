<?php

namespace app\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * Модель "Авторы"
 *
 * Class Author
 * @package app\models
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $middle_name
 *
 * @property Post[] $posts
 */
class Author extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName(): string
    {
        return 'authors';
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'middle_name'], 'string', 'max' => 256],
            [['first_name', 'last_name', 'middle_name'], 'safe'],
        ];
    }

    /**
     * @return ActiveQuery
     */
    public function getPosts(): ActiveQuery
    {
        return $this->hasMany(Post::class, ['author_id' => 'id']);
    }
}