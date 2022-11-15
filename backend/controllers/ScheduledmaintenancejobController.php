<?php

namespace backend\controllers;

use backend\models\Scheduledmaintenancejob;
use backend\models\ScheduledmaintenancejobSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ScheduledmaintenancejobController implements the CRUD actions for Scheduledmaintenancejob model.
 */
class ScheduledmaintenancejobController extends Controller
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
     * Lists all Scheduledmaintenancejob models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ScheduledmaintenancejobSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Scheduledmaintenancejob model.
     * @param int $smj_id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($smj_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($smj_id),
        ]);
    }

    /**
     * Creates a new Scheduledmaintenancejob model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Scheduledmaintenancejob();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'smj_id' => $model->smj_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Scheduledmaintenancejob model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $smj_id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($smj_id)
    {
        $model = $this->findModel($smj_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'smj_id' => $model->smj_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Scheduledmaintenancejob model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $smj_id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($smj_id)
    {
        $this->findModel($smj_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Scheduledmaintenancejob model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $smj_id ID
     * @return Scheduledmaintenancejob the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($smj_id)
    {
        if (($model = Scheduledmaintenancejob::findOne(['smj_id' => $smj_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
