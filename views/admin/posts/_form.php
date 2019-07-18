<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Post */
/* @var $form yii\widgets\ActiveForm */
/* @var array $categories */
/* @var array $authors */

?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'short_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'post')->textarea(['rows' => 6]) ?>

    <div class="form-group field-category-parents">
        <?= Html::label('Категория', 'category'); ?>
        <?=
            Html::activeDropDownList(
                $model,
                'category_id',
                $categories,
                ['prompt' => '-- не выбрана --']
            );
        ?>
    </div>

    <div class="form-group field-category-parents">
        <?= Html::label('Автор', 'author'); ?>
        <?=
        Html::activeDropDownList(
            $model,
            'author_id',
            $authors,
            ['prompt' => '-- не выбран --']
        );
        ?>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>