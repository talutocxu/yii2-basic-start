<?php

namespace app\modules\admin;

use yii\filters\AccessControl;
use yii\console\Application as ConsoleApplication;
use Yii;
use app\modules\admin\models\User;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\admin\controllers';

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => [User::ROLE_MODER],
                    ],
                ],
            ],
        ];
    }

    public function init()
    {
        parent::init();
        $this->setLayoutPath($this->getViewPath() . '/layouts');
        $this->layout = 'main';
        if (Yii::$app instanceof ConsoleApplication) {
            $this->controllerNamespace = 'app\modules\admin\commands';
        }
    }

    public static function t($category, $message, $params = [], $language = null)
    {
        return Yii::t('modules/admin/' . $category, $message, $params, $language);
    }
}
