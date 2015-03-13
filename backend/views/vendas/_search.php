<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\VendasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vendas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_venda') ?>

    <?= $form->field($model, 'id_user') ?>

    <?= $form->field($model, 'codigo_venda') ?>

    <?= $form->field($model, 'linha1') ?>

    <?= $form->field($model, 'linha2') ?>

    <?php // echo $form->field($model, 'linha3') ?>

    <?php // echo $form->field($model, 'linha4') ?>

    <?php // echo $form->field($model, 'linha5') ?>

    <?php // echo $form->field($model, 'linha6') ?>

    <?php // echo $form->field($model, 'linha7') ?>

    <?php // echo $form->field($model, 'linha8') ?>

    <?php // echo $form->field($model, 'linha9') ?>

    <?php // echo $form->field($model, 'linha10') ?>

    <?php // echo $form->field($model, 'total_venda') ?>

    <?php // echo $form->field($model, 'total_cliente_pagou') ?>

    <?php // echo $form->field($model, 'troco') ?>

    <?php // echo $form->field($model, 'id_cliente') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
