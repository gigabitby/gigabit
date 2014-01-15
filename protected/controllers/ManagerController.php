<?php

class ManagerController extends Controller
{
    public function filters()
    {
        return array(
            'accessControl',
        );
    }


    public function accessRules()
    {
        return array(

            array('allow',
                'actions'=>array('index'),
                'roles'=>array('administrator'),
            ),
            array('deny',
                //'actions'=>array('index'),
                //'roles'=>array('administrator'),
                'users'=>array('*'),
            ),
        );

    }


    public function actionIndex(){
        echo('система');
        $this->layout="/layouts/manager";
        $this->render('index', array('main'=>'ffjwflbfiqbhiwebfhjbehkjbfhi'));


    }



}