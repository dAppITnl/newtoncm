<?php

namespace backend\controllers;

use backend\models\Carmodel;
use backend\models\CarmodelSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CarmodelController implements the CRUD actions for Carmodel model.
 */
class CarmodelController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Carmodel models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new CarmodelSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Carmodel model.
     * @param int $cmd_id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($cmd_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($cmd_id),
        ]);
    }

    /**
     * Creates a new Carmodel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Carmodel();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'cmd_id' => $model->cmd_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Carmodel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $cmd_id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($cmd_id)
    {
        $model = $this->findModel($cmd_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'cmd_id' => $model->cmd_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Carmodel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $cmd_id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($cmd_id)
    {
        $this->findModel($cmd_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Carmodel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $cmd_id ID
     * @return Carmodel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($cmd_id)
    {
        if (($model = Carmodel::findOne(['cmd_id' => $cmd_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
