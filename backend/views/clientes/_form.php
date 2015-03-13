<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Clientes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clientes-form">

    <?php $form = ActiveForm::begin(); ?>

  

    <?= $form->field($model, 'nome_cli')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'endereco_cli')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'cidade_cli')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'uf_cli')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'email_cli')->textInput(['maxlength' => 255]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
