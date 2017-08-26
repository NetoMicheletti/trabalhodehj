<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Diretor */

$this->title = 'Update Diretor: ' . $model->idDiretor;
$this->params['breadcrumbs'][] = ['label' => 'Diretors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idDiretor, 'url' => ['view', 'id' => $model->idDiretor]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="diretor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
