<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Vendas */

$this->title = $model->id_venda;
$this->params['breadcrumbs'][] = ['label' => 'Vendas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vendas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_venda], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_venda], [
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
            'id_venda',
            'id_user',
            'codigo_venda',
            'linha1',
            'linha2',
            'linha3',
            'linha4',
            'linha5',
            'linha6',
            'linha7',
            'linha8',
            'linha9',
            'linha10',
            'total_venda',
            'total_cliente_pagou',
            'troco',
            'id_cliente',
        ],
    ]) ?>

</div>
