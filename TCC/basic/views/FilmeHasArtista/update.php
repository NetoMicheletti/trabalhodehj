<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FilmeHasArtista */

$this->title = 'Update Filme Has Artista: ' . $model->Filme_idFilmes;
$this->params['breadcrumbs'][] = ['label' => 'Filme Has Artistas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Filme_idFilmes, 'url' => ['view', 'Filme_idFilmes' => $model->Filme_idFilmes, 'Artista_idArtista' => $model->Artista_idArtista]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="filme-has-artista-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
