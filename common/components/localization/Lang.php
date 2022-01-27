<?php
namespace common\components\localization;

use Yii;
use yii\base\Component;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

/*
 * Статический класс основных функций для языков
 */
class Lang extends Component
{
    /*
     *
     * @const для запрос установки языка для хендлера
     *        если возникнут коллизии можно сдесь изменить
     *
     *  */
    const SET_LANG_REQUEST = "language";
    /*
    *
    * @const для название сесси если возникнут коллизи с сессиами можно сдесь
     *       изменить имя сесси
    *
    *  */
    const SESSION_LANG_NAME = '_language';
    /*
     * Lang hash ключ в запросе если возникнут коллизи можно изменить
     * это значение сдесь
     */
    const LANG_HASH_GET_NAME = 'lang_hash';
    /*
        * @method - для устновки в событие перед загрузкой приложение
        *           а имено для запроса
        * */
    public static function onRequestHandler()
    {
        static::setLangRequestHandler();
    }
    public static function setLangRequestHandler()
    {
        $session =  Yii::$app->session;
        $currentLang = null;
        $lang = Yii::$app->params['languages'];
        if (Yii::$app->request->get(self::SET_LANG_REQUEST) || Yii::$app->request->post(self::SET_LANG_REQUEST)) {
            $currentLang = Yii::$app->request->{Yii::$app->request->method}(self::SET_LANG_REQUEST);
            if (isset($lang) && isset($lang[$currentLang])) {
                $code  = $currentLang;
                $session->set(self::SESSION_LANG_NAME, $code);
            }
        }
        if ($session->has(self::SESSION_LANG_NAME)) {
            $currentLang = $session->get(self::SESSION_LANG_NAME);
            Yii::$app->language = $currentLang;
        }
    }
}
