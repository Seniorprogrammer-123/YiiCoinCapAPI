<?php

namespace app\controllers;

class OurController extends \yii\web\Controller
{
    public function actionCreate()
    {
        return $this->render('create');
    }

    public function actionDelete()
    {
        return $this->render('delete');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionStore()
    {
        return $this->render('store');
    }

    public function actionUpdate()
    {
        return $this->render('update');
    }

}
