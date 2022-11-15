<?php

namespace backend\controllers;

use backend\models\Sparepart;
use backend\models\SparepartSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SparepartController implements the CRUD actions for Sparepart model.
 */
class SparepartController extends Controller
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
     * Lists all Sparepart models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SparepartSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Sparepart model.
     * @param int $spp_id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($spp_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($spp_id),
        ]);
    }

    /**
     * Creates a new Sparepart model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Sparepart();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'spp_id' => $model->spp_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Sparepart model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $spp_id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($spp_id)
    {
        $model = $this->findModel($spp_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'spp_id' => $model->spp_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Sparepart model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $spp_id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($spp_id)
    {
        $this->findModel($spp_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Sparepart model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $spp_id ID
     * @return Sparepart the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($spp_id)
    {
        if (($model = Sparepart::findOne(['spp_id' => $spp_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
