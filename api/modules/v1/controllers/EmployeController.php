<?php

namespace api\modules\v1\controllers;

use yii\rest\ActiveController;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use yii\filters\auth\HttpBasicAuth;
use backend\models\EmployeeSearch;
use Yii;

/*
Implementasi In Model
*/

class EmployeController extends ActiveController
{
    public $modelClass = 'backend\models\Employee';
//    public $serializer = [
//        'class' => 'yii\rest\Serializer',
//        'collectionEnvelope' => 'items',
//    ];

    protected function verbs()
    {
       return [
           'insert' => ['POST'],
           'data' => ['GET'],
       ];
    }

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


    public function actions()
    {
        $actions = parent::actions();

        // disable the "delete" and "create" actions
        // unset($actions['delete'], $actions['create']);

        // customize the data provider preparation with the "prepareDataProvider()" method
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];
        // $actions['data']['data'] = [$this, 'data'];

        return $actions;
    }

    public function prepareDataProvider()
    {
//        return \backend\models\Employee::find()->select(['id', 'name'])->all();
        $searchModel= new EmployeeSearch();
        return $searchModel->search(Yii::$app->request->queryParams);
    }

    public function prepareDataProviders()
    {
        return \backend\models\Employee::find()->select(['id', 'name'])->all();
    }


    public function actionPurchasedcard(){
        $name = $_POST['name'];
        $email = $_POST['email'];


        $model = new \backend\models\Employee();
        $model->name = $name;
        $model->email =$email;
        
        if ($model->save()) {
            $msg="Sukses";
        } else {
            $msg="Failed";
        };

        return ['data'=>$msg];


         
    }

    // http://localhost/yii2-webapi/api/web/index.php/v1/employes/search
    public function actionSearch()
    {

        // $searchModel= new EmployeeSearch();
        // return $searchModel->search(Yii::$app->request->queryParams);

        return \backend\models\Country::find()->select(['id', 'name'])->all();


    }

    // public function actionData()
    // {
    //     // return [1,2,3,4];
    //             $searchModel= new EmployeeSearch();
    //     return $searchModel->search(Yii::$app->request->queryParams);
    // }



    
}