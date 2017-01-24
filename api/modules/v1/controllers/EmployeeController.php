<?php

namespace api\modules\v1\controllers;

// use Yii;
// use yii\db\Query;

use yii\data\ActiveDataProvider;
use backend\models\Employee;

/*
Implementasi Rest With Query Buider
*/

class EmployeeController extends \yii\rest\Controller
{

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
/*
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
    }*/
    

    protected function verbs()
    {
       return [
           'insert' => ['POST'],
           'index' => ['GET'],
           'search' => ['GET'],
       ];
    }

    public function actionSearch()
    {
       return [1,2,3,4];
    }


    public function actionInsert(){
        $exec = Yii::$app->db->createCommand()
        ->insert('employee', [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
        ])->execute();
        $msg = ($exec)?"SUKSES":"ERROR KAKA";
        return ['data'=>$msg];
    }

    
  public function actionIndex(){

        return new ActiveDataProvider([
            'query' => Employee::find(),
        ]);

  }

}