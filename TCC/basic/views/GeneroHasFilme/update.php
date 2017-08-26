<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GeneroHasFilme */

$this->title = 'Update Genero Has Filme: ' . $model->Genero_idGenero;
$this->params['breadcrumbs'][] = ['label' => 'Genero Has Filmes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Genero_idGenero, 'url' => ['view', 'Genero_idGenero' => $model->Genero_idGenero, 'Filmes_idFilmes' => $model->Filmes_idFilmes]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="genero-has-filme-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
