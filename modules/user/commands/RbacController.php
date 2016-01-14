<?php
namespace app\modules\user\commands;

use Yii;
use yii\console\Controller;
use app\modules\user\components\rbac\UserRoleRule;
use app\modules\user\Module;

/**
 * Console RBAC
 *
 * @package console\controllers
 * input root app console: php yii user/rbac/init
 */
class RbacController extends Controller
{
    /**
     * Commands
     */
    public function actionIndex()
    {
        echo 'php yii user/rbac/init' . PHP_EOL;
    }

    /**
     * Create php file for rbac directory
     * Set directory config common.php
     * section components authManager
     */
    public function actionInit()
    {
        $auth = Yii::$app->authManager;
        $auth->removeAll(); //удаляем старые данные

        //Создадим права доступа к управлению пользователями
        $blog = $auth->createPermission('manageUsers');
        $blog->description = Module::t('module', 'RBAC_MANAGE_USERS');
        $auth->add($blog);

        //Включаем наш обработчик
        $rule = new UserRoleRule();
        $auth->add($rule);

        //Добавляем роли
        $user = $auth->createRole('user');
        $user->description = Module::t('module', 'RBAC_USER');
        $user->ruleName = $rule->name;
        $auth->add($user);
        $moder = $auth->createRole('moder');
        $moder->description = Module::t('module', 'RBAC_MODERATOR');
        $moder->ruleName = $rule->name;
        $auth->add($moder);

        //Добавляем потомков
        $auth->addChild($moder, $user);
        $auth->addChild($moder, $blog);
        $admin = $auth->createRole('admin');
        $admin->description = Module::t('module', 'RBAC_ADMINISTRATOR');
        $admin->ruleName = $rule->name;
        $auth->add($admin);
        $auth->addChild($admin, $moder);
    }
}