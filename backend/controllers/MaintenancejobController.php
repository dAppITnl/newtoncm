<?php

namespace backend\controllers;

use backend\models\Maintenancejob;
use backend\models\MaintenancejobSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MaintenancejobController implements the CRUD actions for Maintenancejob model.
 */
class MaintenancejobController extends Controller
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
     * Lists all Maintenancejob models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MaintenancejobSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Maintenancejob model.
     * @param int $mjb_id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($mjb_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($mjb_id),
        ]);
    }

    /**
     * Creates a new Maintenancejob model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Maintenancejob();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'mjb_id' => $model->mjb_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Maintenancejob model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $mjb_id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($mjb_id)
    {
        $model = $this->findModel($mjb_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'mjb_id' => $model->mjb_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Maintenancejob model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $mjb_id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($mjb_id)
    {
        $this->findModel($mjb_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Maintenancejob model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $mjb_id ID
     * @return Maintenancejob the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($mjb_id)
    {
        if (($model = Maintenancejob::findOne(['mjb_id' => $mjb_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
