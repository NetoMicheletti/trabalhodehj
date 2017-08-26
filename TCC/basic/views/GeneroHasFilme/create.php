<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\GeneroHasFilme */

$this->title = 'Create Genero Has Filme';
$this->params['breadcrumbs'][] = ['label' => 'Genero Has Filmes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="genero-has-filme-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
