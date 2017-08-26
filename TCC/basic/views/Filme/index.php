<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FilmeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Filmes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="filme-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Cadastar Filme', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'idFilmes',
            'Titulo',
            'Diretor',
            'Elenco',
            'Ano',
            // 'Duracao',
            // 'Classificação',
            // 'Diretor_idDiretor',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
