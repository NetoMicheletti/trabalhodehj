<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Filme */

$this->title = $model->idFilmes;
$this->params['breadcrumbs'][] = ['label' => 'Filmes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="filme-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->idFilmes], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Excluir', ['delete', 'id' => $model->idFilmes], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Excluir Filme ?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idFilmes',
            'Titulo',
            'Diretor',
            'Elenco',
            'Ano',
            'Duracao',
            'Classificação',
            'Diretor_idDiretor',
        ],
    ]) ?>

</div>
