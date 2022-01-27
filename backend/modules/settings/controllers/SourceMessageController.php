<?php

namespace backend\modules\settings\controllers;

use backend\modules\settings\models\Message;
use backend\modules\settings\models\search\SourceMessageSearch;
use Yii;

/**
* This is the class for controller "SourceMessageController".
*/
class SourceMessageController extends \backend\modules\settings\controllers\base\SourceMessageController
{
    /**
     * Lists all SourceMessage models.
     * @return mixed
     */
    public function actionList()
    {
        if (Yii::$app->request->post("hasEditable")) {
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            $posts = Yii::$app->request->post("translation");
            $value_data = array_values($posts)[0];
            //LANG
            $lang = array_keys($posts)[0];
            //SOURCE ID
            $id = array_keys($value_data)[0];
            //VALUE
            $value =  array_values($value_data)[0];
            $message_query = Message::find()->where(['id' => $id])->andWhere(['language' => $lang]);
            if ($message_query->count() > 0) {
                $message = $message_query->one();
            } else {
                $message = new Message();
                $message->id = $id;
                $message->language = $lang;
            }
            $message->translation = $value;
            $message->save();

            return ['output'=>$value, 'message'=>$message->getFirstError("translition")];
        }

        $searchModel = new SourceMessageSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('list', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
}
