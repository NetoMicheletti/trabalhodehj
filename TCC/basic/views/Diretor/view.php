<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Diretor */

$this->title = $model->idDiretor;
$this->params['breadcrumbs'][] = ['label' => 'Diretors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diretor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->idDiretor], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Excluir', ['delete', 'id' => $model->idDiretor], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Excluir Diretor ?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idDiretor',
            'Nome',
            'Pais',
            'Nascimento',
        ],
    ]) ?>

</div>
