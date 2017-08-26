<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\FilmeHasArtista */

$this->title = $model->Filme_idFilmes;
$this->params['breadcrumbs'][] = ['label' => 'Filme Has Artistas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="filme-has-artista-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Filme_idFilmes' => $model->Filme_idFilmes, 'Artista_idArtista' => $model->Artista_idArtista], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Filme_idFilmes' => $model->Filme_idFilmes, 'Artista_idArtista' => $model->Artista_idArtista], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Filme_idFilmes',
            'Artista_idArtista',
        ],
    ]) ?>

</div>
