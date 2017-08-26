<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FilmeHasArtistaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Filme Has Artistas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="filme-has-artista-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Filme Has Artista', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Filme_idFilmes',
            'Artista_idArtista',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
