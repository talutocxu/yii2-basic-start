<?php

namespace app\modules\admin\modules\user;

use yii\base\BootstrapInterface;
use Yii;

class Bootstrap implements BootstrapInterface
{
    public function bootstrap($app)
    {
        $app->i18n->translations['modules/admin-user/*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'forceTranslation' => true,
            'basePath' => '@app/modules/admin/modules/user/messages',
            'fileMap' => [
                'modules/admin-user/module' => 'module.php',
            ],
        ];
    }
}