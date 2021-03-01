<?php

namespace app\controllers;

class PartController extends \yii\web\Controller
{
    public function actionIndex()
    {
        // data ambik dari database
        $data = "This is a data ";
        $data2 = "test data ";

        $Array =  [
          
              'hello' => $data,
              'helu' => $data2

        ];

            print_r($Array);
        
        
        return $this->render('index',compact('data','data2'));
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
 

}
