<?php

use yii\helpers\Html;
use app\modules\admin\models\User;
use app\modules\admin\Module;

/* @var $this yii\web\View */
/* @var $model \app\modules\admin\modules\user\models\User */

$this->title = Module::t('module', 'ADMIN');
?>
<div class="admin-default-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Yii::$app->user->can(User::ROLE_ADMIN) ? Html::a(Module::t('module', 'ADMIN_USERS'), ['users/default/index'], ['class' => 'btn btn-primary']) : ''; ?>
    </p>
</div>
