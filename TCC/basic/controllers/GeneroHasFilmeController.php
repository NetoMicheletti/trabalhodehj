<?php

namespace app\controllers;

use Yii;
use app\models\GeneroHasFilme;
use app\models\GeneroHasFilmeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * GeneroHasFilmeController implements the CRUD actions for GeneroHasFilme model.
 */
class GeneroHasFilmeController extends Controller
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
     * Lists all GeneroHasFilme models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GeneroHasFilmeSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single GeneroHasFilme model.
     * @param integer $Genero_idGenero
     * @param integer $Filmes_idFilmes
     * @return mixed
     */
    public function actionView($Genero_idGenero, $Filmes_idFilmes)
    {
        return $this->render('view', [
            'model' => $this->findModel($Genero_idGenero, $Filmes_idFilmes),
        ]);
    }

    /**
     * Creates a new GeneroHasFilme model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new GeneroHasFilme();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Genero_idGenero' => $model->Genero_idGenero, 'Filmes_idFilmes' => $model->Filmes_idFilmes]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing GeneroHasFilme model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $Genero_idGenero
     * @param integer $Filmes_idFilmes
     * @return mixed
     */
    public function actionUpdate($Genero_idGenero, $Filmes_idFilmes)
    {
        $model = $this->findModel($Genero_idGenero, $Filmes_idFilmes);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Genero_idGenero' => $model->Genero_idGenero, 'Filmes_idFilmes' => $model->Filmes_idFilmes]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing GeneroHasFilme model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $Genero_idGenero
     * @param integer $Filmes_idFilmes
     * @return mixed
     */
    public function actionDelete($Genero_idGenero, $Filmes_idFilmes)
    {
        $this->findModel($Genero_idGenero, $Filmes_idFilmes)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the GeneroHasFilme model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $Genero_idGenero
     * @param integer $Filmes_idFilmes
     * @return GeneroHasFilme the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Genero_idGenero, $Filmes_idFilmes)
    {
        if (($model = GeneroHasFilme::findOne(['Genero_idGenero' => $Genero_idGenero, 'Filmes_idFilmes' => $Filmes_idFilmes])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
