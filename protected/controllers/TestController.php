<?php
class TestController extends Controller{
    /*
    public function run($id){
        echo('привет');




    }
*/
    public function actionIndex(){
       print_r(Yii::app()->request->getUrl());
        echo('<hr>');
        echo( Yii::app()->user->loginUrl=(Yii::app()->createUrl(Yii::app()->params['AdminStart'])));
       // echo(Yii::app()->params['AdminStart']);
       // $this->redirect( Yii::app()->createUrl(Yii::app()->params['AdminStart']));
      //  $this->render('index', array('main'=>'ffjwflbfiqbhiwebfhjbehkjbfhi'));

    }


}