<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Categories */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="categories-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?php
	
	//prd($categoryList);
	/*
	echo $form->field($model, 'attribute')
        ->dropDownList(
            $items,           // Flat array ('id'=>'label')
            ['prompt'=>'']    // options
        );
*/
		
		echo $form->field($model, 'parent_id')->dropDownList($categoryList) ;
		?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
