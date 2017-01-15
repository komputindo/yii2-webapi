<?php

namespace api\modules\v1\controllers;

use Yii;

use yii\db\Query;

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
        // $model = \backend\models\employee::findAll();

          $params=$_REQUEST;
          $filter=array();
          $sort="";
         
          $page=2;
          $limit=3;


          if(isset($params['page']))
             $page=$params['page'];
              
               
           if(isset($params['limit']))
              $limit=$params['limit'];
               
            $offset=$limit*($page-1);


               $query=new Query;
               $query->offset($offset)
                 ->limit($limit)
                 ->from('employee')
                 // ->andFilterWhere(['like', 'id', $filter['id']])32

                 // ->andFilterWhere(['like', 'name', $filter['name']])
                 // ->andFilterWhere(['like', 'age', $filter['age']])
                 ->orderBy($sort)
                 ->select("name, email, birthday");
                 

           $command = $query->createCommand();
               $models = $command->queryAll();
                $totalItems=$query->count();



        // $model=[2,3,4];


        // return ['count'=> $totalItems ,'data'=>$models];

                return [1=>'A',2=>'B',3=>'C',4=>'D'];
    } 

}