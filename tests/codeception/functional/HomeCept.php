<?php

/* @var $scenario Codeception\Scenario */

$I = new FunctionalTester($scenario);
$I->wantTo('ensure that home page works');
$I->amOnPage(Yii::$app->homeUrl);
$I->see('Congratulations!', 'h1');

$I->seeLink('Contact');
$I->click('Contact');
$I->see('Contact', 'h1');
