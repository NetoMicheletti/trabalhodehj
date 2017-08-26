<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DiretorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="diretor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idDiretor') ?>

    <?= $form->field($model, 'Nome') ?>

    <?= $form->field($model, 'Pais') ?>

    <?= $form->field($model, 'Nascimento') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
