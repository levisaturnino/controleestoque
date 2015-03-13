<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ClientesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clientes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_cli') ?>

    <?= $form->field($model, 'id_user') ?>

    <?= $form->field($model, 'nome_cli') ?>

    <?= $form->field($model, 'endereco_cli') ?>

    <?= $form->field($model, 'cidade_cli') ?>

    <?php // echo $form->field($model, 'uf_cli') ?>

    <?php // echo $form->field($model, 'email_cli') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
