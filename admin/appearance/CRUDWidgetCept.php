<?php 
$I = new AcceptanceTester($scenario);
$I->am('the administrator');
$I->wantTo('CRUD widgets');

$I->wantTo('login as admin and go on panel -> appearance -> widgets');
$I->amOnPage('/oc-panel/auth/login');
$I->fillField('email','admin@reoc.lo');
$I->fillField('password','1234');
$I->click('auth_redirect');
$I->amOnPage('/oc-panel/');
$I->see('welcome admin');

$I->amOnPage('/oc-panel/widget');
$I->wantTo('create a "Categories" widget');
$I->click('//button[@data-target="#modal_Widget_Categories"]');
$I->selectOption('placeholder','sidebar');
$I->click('Save changes');
$I->wantTo('see this widget (successfull message after creation and element on the frontend)');
$I->see('Widget created in sidebar');
$I->amOnPage('/');
$I->seeElement('.Widget_Categories');
$I->wantTo('delete this widget');
$I->amOnPage('/oc-panel/widget');
$I->click('.btn.btn-primary.btn-xs.pull-right');
$I->click('.btn.btn-danger.pull-left');

$I->amOnPage('/');
$I->click('Logout');























