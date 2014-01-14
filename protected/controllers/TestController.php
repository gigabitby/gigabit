<?php
class TestController extends Controller{
    public function actionIndex(){
        //$this->render('index', array('main'=>'ffjwflbfiqbhiwebfhjbehkjbfhi'));



       Yii::app()->session;

        //echo($session);
        echo('<pre>');
        print_r($_SESSION);
        // print_r(Yii::app()->session());
        echo('</pre>');
    }


}