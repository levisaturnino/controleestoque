<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Vendas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vendas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_user')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'codigo_venda')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'linha1')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'linha2')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'linha3')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'linha4')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'linha5')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'linha6')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'linha7')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'linha8')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'linha9')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'linha10')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'total_venda')->textInput() ?>

    <?= $form->field($model, 'total_cliente_pagou')->textInput() ?>

    <?= $form->field($model, 'troco')->textInput() ?>

    <?= $form->field($model, 'id_cliente')->textInput(['maxlength' => 255]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
