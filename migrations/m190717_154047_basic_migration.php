<?php

use yii\db\Migration;

/**
 * Class m190717_154047_basic_migration
 */
class m190717_154047_basic_migration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        /** Создание таблицы "Авторы" */
        $this->createTable('authors', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string(256),
            'last_name' => $this->string(256),
            'middle_name' => $this->string(256),
        ]);

        /** Создание таблицы "Категории" */
        $this->createTable('categories', [
            'id' => $this->primaryKey(),
            'name' => $this->string(512),
            'description' => $this->string(256),
            'created_at' => $this->timestamp()->notNull(),
            'updated_at' => $this->timestamp()->null(),
        ]);

        /** Создание таблицы "Посты" */
        $this->createTable('posts', [
            'id' => $this->primaryKey(),
            'author_id' => $this->integer()->notNull(),
            'title' => $this->string(256),
            'slug' => $this->string(256),
            'post' => $this->text(),
            'short_name' => $this->string(1024),
            'created_at' => $this->timestamp()->notNull(),
            'updated_at' => $this->timestamp()->null(),
        ]);

        $this->createIndex('idx_posts_author_id', 'posts', 'author_id');
        $this->addForeignKey('fk_posts_author_id', 'posts', 'author_id', 'authors', 'id', 'CASCADE');

        /** Создание связующей таблицы между таблицами "Посты" и "Категории" */
        $this->createTable('posts_categories', [
            'post_id' => $this->integer(),
            'category_id' => $this->integer(),
        ]);

        $this->addPrimaryKey('post_category_pkey', 'posts_categories', ['post_id', 'category_id']);
        $this->createIndex('idx_posts_categories_post_id', 'posts_categories', 'post_id');
        $this->createIndex('idx_posts_categories_category_id', 'posts_categories', 'category_id');
        $this->addForeignKey('fk_posts_categories_post_id', 'posts_categories', 'post_id', 'posts', 'id', 'CASCADE');
        $this->addForeignKey('fk_posts_categories_category_id', 'posts_categories', 'category_id', 'categories', 'id', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        /** Удаление связующей таблицы между таблицами "Посты" и "Категории" */
        $this->dropForeignKey('fk_posts_categories_post_id', 'posts_categories');
        $this->dropForeignKey('fk_posts_categories_category_id', 'posts_categories');
        $this->dropIndex('idx_posts_categories_post_id', 'posts_categories');
        $this->dropIndex('idx_posts_categories_category_id', 'posts_categories');
        $this->dropTable('posts_categories');

        /** Удаление таблицы "Посты" */
        $this->dropForeignKey('fk_posts_author_id', 'posts');
        $this->dropIndex('idx_posts_author_id', 'posts');
        $this->dropTable('posts');

        /** Удаление таблицы "Категории" */
        $this->dropTable('categories');

        /** Удаление таблицы "Авторы" */
        $this->dropTable('authors');
    }
}
