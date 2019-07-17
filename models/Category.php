<?php

namespace app\models;

use yii\base\InvalidConfigException;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * Модель "Категории"
 *
 * Class Category
 * @package app\models
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Post[] $posts
 */
class Category extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName(): string
    {
        return 'categories';
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            ['name', 'string', 'max' => 512],
            ['description', 'string', 'max' => 256],
            [['name', 'description', 'created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * @return ActiveQuery
     * @throws InvalidConfigException
     */
    public function getPosts(): ActiveQuery
    {
        return $this->hasMany(Post::class, ['id' => 'post_id'])
            ->viaTable('posts_categories', ['category_id' => 'id']);
    }
}