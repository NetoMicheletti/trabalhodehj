<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Artista */

$this->title = 'Update Artista: ' . $model->idArtista;
$this->params['breadcrumbs'][] = ['label' => 'Artistas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idArtista, 'url' => ['view', 'id' => $model->idArtista]];
$this->params['breadcrumbs'][] = 'Salvar';
?>
<div class="artista-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
