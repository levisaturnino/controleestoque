<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Produtos */

$this->title = 'Update Produtos: ' . ' ' . $model->id_prod;
$this->params['breadcrumbs'][] = ['label' => 'Produtos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_prod, 'url' => ['view', 'id' => $model->id_prod]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="produtos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
