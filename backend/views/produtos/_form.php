<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Produtos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produtos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_user')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'nome_prod')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'preco_prod')->textInput() ?>

    <?= $form->field($model, 'estoque_prod')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'status_venda_prod')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'codigo_prod')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'qtd_venda_prod')->textInput(['maxlength' => 255]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
