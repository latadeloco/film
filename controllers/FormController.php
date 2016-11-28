<?php

namespace app\controllers;

use Yii;
use app\models\Fichas;
use app\models\Cliente;

class FormController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new Cliente;

        $fichas = Fichas::find()->select('titulo, id')->indexBy('id')->column();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            return;
        }

        return $this->render('index', [
            'model' => $model,
            'fichas' => $fichas,
        ]);
    }
}
