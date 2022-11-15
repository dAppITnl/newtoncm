<?php

namespace backend\controllers;

use backend\models\Timeslot;
use backend\models\TimeslotSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TimeslotController implements the CRUD actions for Timeslot model.
 */
class TimeslotController extends Controller
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
     * Lists all Timeslot models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TimeslotSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Timeslot model.
     * @param int $tsl_id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($tsl_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($tsl_id),
        ]);
    }

    /**
     * Creates a new Timeslot model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Timeslot();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'tsl_id' => $model->tsl_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Timeslot model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $tsl_id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($tsl_id)
    {
        $model = $this->findModel($tsl_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'tsl_id' => $model->tsl_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Timeslot model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $tsl_id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($tsl_id)
    {
        $this->findModel($tsl_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Timeslot model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $tsl_id ID
     * @return Timeslot the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($tsl_id)
    {
        if (($model = Timeslot::findOne(['tsl_id' => $tsl_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
