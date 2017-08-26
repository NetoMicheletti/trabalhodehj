<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GeneroHasFilme */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="genero-has-filme-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Genero_idGenero')->textInput() ?>

    <?= $form->field($model, 'Filmes_idFilmes')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
