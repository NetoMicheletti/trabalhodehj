<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GeneroHasFilmeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Genero Has Filmes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="genero-has-filme-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Genero Has Filme', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Genero_idGenero',
            'Filmes_idFilmes',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
