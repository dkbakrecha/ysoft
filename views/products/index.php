<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Products', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'product_code',
            'product_title',
            'description:ntext',
            'height',
            //'width',
            //'length',
            //'net_size',
            //'cbm',
            //'cbf',
            //'special_instruction',
            //'special_instruction_file',
            //'assembly_instruction',
            //'assembly_instruction_file',
            //'finishing_type',
            //'keywords',
            //'multiple_parts',
            //'image',
            //'created',
            //'modified',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
