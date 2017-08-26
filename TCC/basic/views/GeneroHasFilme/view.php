<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\GeneroHasFilme */

$this->title = $model->Genero_idGenero;
$this->params['breadcrumbs'][] = ['label' => 'Genero Has Filmes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="genero-has-filme-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Genero_idGenero' => $model->Genero_idGenero, 'Filmes_idFilmes' => $model->Filmes_idFilmes], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Genero_idGenero' => $model->Genero_idGenero, 'Filmes_idFilmes' => $model->Filmes_idFilmes], [
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
            'Genero_idGenero',
            'Filmes_idFilmes',
        ],
    ]) ?>

</div>
