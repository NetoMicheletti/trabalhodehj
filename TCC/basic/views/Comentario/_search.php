<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ComentarioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comentario-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idComentarios') ?>

    <?= $form->field($model, 'Comentario') ?>

    <?= $form->field($model, 'Data') ?>

    <?= $form->field($model, 'Nota') ?>

    <?= $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'Filmes_idFilmes') ?>

    <?php // echo $form->field($model, 'Usuario_idUsuario') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
