<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Filme */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="filme-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Diretor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Elenco')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ano')->textInput() ?>

    <?= $form->field($model, 'Duracao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Classificação')->textInput() ?>

    <?//= $form->field($model, 'Diretor_idDiretor')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Cadastrar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
