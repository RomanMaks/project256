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
     * @return array
     */
    public function rules()
    {
        return [
            ['author_id', 'required'],
            ['author_id', 'integer'],
            [['title', 'slug'], 'string', 'max' => 256],
            ['post', 'string'],
            ['short_name', 'string', 'max' => 1024],
            [['title', 'slug', 'post', 'short_name', 'created_at', 'updated_at'], 'safe'],
        ];
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