<?php

namespace frontend\controllers;

use yii\rest\ActiveController;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use yii\filters\auth\HttpBasicAuth;

class UsrController extends ActiveController
{
    public $modelClass = 'backend\models\Usr';

    // public function behaviors()
    // {
    //     return [
    //         [
    //             'class' => \yii\filters\ContentNegotiator::className(),
    //             'only' => ['index', 'view'],
    //             'formats' => [
    //                 'application/json' => \yii\web\Response::FORMAT_JSON,
    //             ],
    //         ],
    //     ];
    // }


    public function behaviors()
    {
        $behaviors = parent::behaviors();

        // remove authentication filter
        $auth = $behaviors['authenticator'];
        unset($behaviors['authenticator']);
        
        // add CORS filter
        $behaviors['corsFilter'] = [
            'class' => \yii\filters\Cors::className(),
        ];
        
        // re-add authentication filter
        $behaviors['authenticator'] = $auth;
        // avoid authentication on CORS-pre-flight requests (HTTP OPTIONS method)
        $behaviors['authenticator']['except'] = ['options'];

        return $behaviors;
    }


    // public function actions(){
    //     $actions = parent::actions();

    //     // disable the "delete" and "create" actions
    //     unset($actions['delete'], $actions['create']);

    //     // customize the data provider preparation with the "prepareDataProvider()" method
    //     $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];

    //     return $actions;

    // }


    // public function actionIndex(){
    //     $activeData = new ActiveDataProvider([
    //         'query' => \common\models\User::find(),
    //         'pagination' => [
    //             'defaultPageSize' => 2,
    //         ],
    //     ]);
    //     return $activeData;
    // }


    // public function prepareDataProvider()
    // {
    //     return new ActiveDataProvider([
    //         'query' => \common\models\User::find(),
    //         'pagination' => ['defaultPageSize' => 3],
    //     ]);
    // }

    
}