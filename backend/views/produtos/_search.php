<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ProdutosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produtos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_prod') ?>

    <?= $form->field($model, 'id_user') ?>

    <?= $form->field($model, 'nome_prod') ?>

    <?= $form->field($model, 'preco_prod') ?>

    <?= $form->field($model, 'estoque_prod') ?>

    <?php // echo $form->field($model, 'status_venda_prod') ?>

    <?php // echo $form->field($model, 'codigo_prod') ?>

    <?php // echo $form->field($model, 'qtd_venda_prod') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
