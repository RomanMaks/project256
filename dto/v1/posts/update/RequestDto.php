<?php

namespace app\dto\v1\posts\update;

use Runn\ValueObjects\ComplexValueObject;
use Runn\ValueObjects\Values\IntValue;
use Runn\ValueObjects\Values\StringValue;

/**
 * Объект значения запроса
 *
 * Class RequestDto
 * @package app\dto\v1\posts\update
 *
 * @property integer $id
 * @property string $title
 * @property string $slug
 * @property string $post
 * @property string $short_name
 */
class RequestDto extends ComplexValueObject
{
    protected static $schema = [
        'id' => ['class' => IntValue::class],
        'title' => ['class' => StringValue::class],
        'slug' => ['class' => StringValue::class],
        'post' => ['class' => StringValue::class],
        'short_name' => ['class' => StringValue::class],
    ];

    /**
     * Создание объекта значения из запроса POST
     *
     * @return RequestDto
     */
    public static function createFromRequest(): self
    {
        $post = \Yii::$app->request->post();

        return new self([
            'id' => $post['id'],
            'title' => $post['title'] ?? null,
            'slug' => $post['slug'] ?? null,
            'post' => $post['post'] ?? null,
            'short_name' => $post['shortName'] ?? null,
        ]);
    }
}