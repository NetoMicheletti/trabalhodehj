<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Filme */

$this->title = 'Update Filme: ' . $model->idFilmes;
$this->params['breadcrumbs'][] = ['label' => 'Filmes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idFilmes, 'url' => ['view', 'id' => $model->idFilmes]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="filme-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
