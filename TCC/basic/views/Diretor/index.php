<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DiretorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Diretor';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diretor-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Cadastrar Diretor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'idDiretor',
            'Nome',
            'Pais',
            'Nascimento',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
