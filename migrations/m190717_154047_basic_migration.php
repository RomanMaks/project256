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
        $this->createTable('authors', [
            'first_name' => $this->string(256),
            'last_name' => $this->string(256),
            'middle_name' => $this->string(256),
        ]);

        $this->createTable('post', [
            'name' => $this->string(256),
            'slug' => $this->string(256),
            'post' => $this->text(),
            'short_name' => $this->string(1024),
            'created_at' => $this->timestamp()->notNull(),
            'updated_at' => $this->timestamp()->null(),
        ]);

       $this->createTable('categories', [
            'name' => $this->string(512),
            'description' => $this->string(256),
            'created_at' => $this->timestamp()->notNull(),
            'updated_at' => $this->timestamp()->null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('categories');
        $this->dropTable('post');
        $this->dropTable('authors');
    }
}
