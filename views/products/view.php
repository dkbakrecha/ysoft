<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Products */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'product_code',
            'product_title',
            'description:ntext',
            'height',
            'width',
            'length',
            'net_size',
            'cbm',
            'cbf',
            'special_instruction',
            'special_instruction_file',
            'assembly_instruction',
            'assembly_instruction_file',
            'finishing_type',
            'keywords',
            'multiple_parts',
            'image',
            'created',
            'modified',
            'status',
        ],
    ]) ?>

</div>
