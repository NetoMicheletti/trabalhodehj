<?php

namespace app\controllers;

use Yii;
use app\models\FilmeHasArtista;
use app\models\FilmeHasArtistaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FilmeHasArtistaController implements the CRUD actions for FilmeHasArtista model.
 */
class FilmeHasArtistaController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all FilmeHasArtista models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FilmeHasArtistaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FilmeHasArtista model.
     * @param integer $Filme_idFilmes
     * @param integer $Artista_idArtista
     * @return mixed
     */
    public function actionView($Filme_idFilmes, $Artista_idArtista)
    {
        return $this->render('view', [
            'model' => $this->findModel($Filme_idFilmes, $Artista_idArtista),
        ]);
    }

    /**
     * Creates a new FilmeHasArtista model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new FilmeHasArtista();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Filme_idFilmes' => $model->Filme_idFilmes, 'Artista_idArtista' => $model->Artista_idArtista]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing FilmeHasArtista model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $Filme_idFilmes
     * @param integer $Artista_idArtista
     * @return mixed
     */
    public function actionUpdate($Filme_idFilmes, $Artista_idArtista)
    {
        $model = $this->findModel($Filme_idFilmes, $Artista_idArtista);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Filme_idFilmes' => $model->Filme_idFilmes, 'Artista_idArtista' => $model->Artista_idArtista]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing FilmeHasArtista model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $Filme_idFilmes
     * @param integer $Artista_idArtista
     * @return mixed
     */
    public function actionDelete($Filme_idFilmes, $Artista_idArtista)
    {
        $this->findModel($Filme_idFilmes, $Artista_idArtista)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FilmeHasArtista model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $Filme_idFilmes
     * @param integer $Artista_idArtista
     * @return FilmeHasArtista the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Filme_idFilmes, $Artista_idArtista)
    {
        if (($model = FilmeHasArtista::findOne(['Filme_idFilmes' => $Filme_idFilmes, 'Artista_idArtista' => $Artista_idArtista])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
