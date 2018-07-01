<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Basic Information</a></li>
        <li><a data-toggle="tab" href="#menu1">Basic Information (2)</a></li>
        <li><a data-toggle="tab" href="#menu2">Product Images (3)</a></li>
        <li><a data-toggle="tab" href="#menu3">Multi Parts (3)</a></li>
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <?php $form = ActiveForm::begin(); ?>
            <?= $form->field($model, 'product_title')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
            <?= $form->field($model, 'finishing_type')->textInput(['maxlength' => true]) ?>
            <?php
            echo $form->field($model, 'category_id')->dropDownList($categoryList);
            echo $form->field($model, 'finishing_type')->textInput(['maxlength' => true])
            ?>
            <?= $form->field($model, 'height')->textInput() ?>
            <?= $form->field($model, 'width')->textInput() ?>
            <?= $form->field($model, 'length')->textInput() ?>
            <?= $form->field($model, 'cbm')->textInput() ?>

            <?= $form->field($model, 'cbf')->textInput() ?>

            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
        <div id="menu1" class="tab-pane fade">
            <?= $form->field($model, 'special_instruction')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'special_instruction_file')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'assembly_instruction')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'assembly_instruction_file')->textInput(['maxlength' => true]) ?>
        </div>
        <div id="menu2" class="tab-pane fade">
            <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>
        </div>
        <div id="menu3" class="tab-pane fade">
            <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'multiple_parts')->textInput() ?>
            <?= $form->field($model, 'created')->textInput() ?>
            <?= $form->field($model, 'modified')->textInput() ?>
            <?= $form->field($model, 'status')->textInput() ?>
        </div>
        <?php
        //prd($categoryList);
        ?>



















    </div>
