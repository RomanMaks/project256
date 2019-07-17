<?php

namespace app\models;

use yii\base\InvalidConfigException;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * Модель "Посты"
 *
 * Class Post
 * @package app\models
 *
 * @property integer $id
 * @property integer $author_id
 * @property string $title
 * @property string $slug
 * @property string $post
 * @property string $short_name
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Author $author
 * @property Category[] $categories
 */
class Post extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName(): string
    {
        return 'posts';
    }

    /**
     * @return ActiveQuery
     */
    public function getAuthor(): ActiveQuery
    {
        return $this->hasOne(Author::class, ['id' => 'author_id']);
    }

    /**
     * @return ActiveQuery
     * @throws InvalidConfigException
     */
    public function getCategories(): ActiveQuery
    {
        return $this->hasMany(Category::class, ['id' => 'category_id'])
            ->viaTable('posts_categories', ['post_id' => 'id']);
    }
}