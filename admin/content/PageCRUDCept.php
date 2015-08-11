<?php 
$I = new AcceptanceTester($scenario);
$I->am('the administrator');
$I->wantTo('crud a page');

$I->amOnPage('/oc-panel/auth/login');
$I->fillField('email','admin@reoc.lo');
$I->fillField('password','1234');
$I->click('auth_redirect');
$I->see('welcome admin');

$I->amOnPage('/oc-panel/content/page');
$I->click('a[href="http://reoc.lo/oc-panel/content/create?type=page"]');
$I->see('Create Page');

$I->fillField('#title','My Page');
$I->fillField('#description','This is a page I created for test!');
$I->fillField('#seotitle','my-page');
$I->checkOption('status');
$I->click('button[type="submit"]');

$I->see('page is created. Please to see the changes delete the cache');

$I->amOnPage('/my-page.html');
$I->dontSee('Page not found');

$I->click('Logout'); 

