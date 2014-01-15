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
        $this->layout="/layouts/manager";
        return array(

            array('allow',
                'actions'=>array('index','Orders'),
                'roles'=>array('administrator'),
            ),
            array('allow',
                'actions'=>array('login'),
                //'roles'=>array('guest'),
                'users'=>array('*'),
            ),
            array('deny',
                //'actions'=>array('index'),
                //'roles'=>array('administrator'),
                'users'=>array('*'),
            ),
        );

    }


    public function actionIndex(){

        $this->render('index', array('main'=>'ffjwflbfiqbhiwebfhjbehkjbfhi'));
    }

    public function actionOrders(){

        $this->render('index', array('main'=>'ffjwflbfiqbhiwebfhjbehkjbfhi'));


    }



}