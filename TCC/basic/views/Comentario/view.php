<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Comentario */

$this->title = $model->idComentarios;
$this->params['breadcrumbs'][] = ['label' => 'Comentarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comentario-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->idComentarios], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Excluir', ['delete', 'id' => $model->idComentarios], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Excluir Comentario ?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idComentarios',
            'Comentario',
            'Data',
            'Nota',
            'status',
            'Filmes_idFilmes',
            'Usuario_idUsuario',
        ],
    ]) ?>

</div>
