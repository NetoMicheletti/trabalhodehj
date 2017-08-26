<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FilmeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="filme-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idFilmes') ?>

    <?= $form->field($model, 'Titulo') ?>

    <?= $form->field($model, 'Diretor') ?>

    <?= $form->field($model, 'Elenco') ?>

    <?= $form->field($model, 'Ano') ?>

    <?php // echo $form->field($model, 'Duracao') ?>

    <?php // echo $form->field($model, 'Classificação') ?>

    <?php // echo $form->field($model, 'Diretor_idDiretor') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
