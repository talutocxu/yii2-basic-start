<?php

/* @var $scenario Codeception\Scenario */

$I = new AcceptanceTester($scenario);
$I->wantTo('Check the mapping of all pages on the links with the transition');
$I->amOnPage(Yii::$app->homeUrl);

$I->see('Congratulations!', 'h1');

$I->seeLink('Contact');
$I->click('Contact');
$I->see('Contact', 'h1');

$I->seeLink('Signup');
$I->click('Signup');
$I->see('Signup', 'h1');

$I->seeLink('Login');
$I->click('Login');
$I->see('Login', 'h1');
