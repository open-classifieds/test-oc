<?php 
$I = new AcceptanceTester($scenario);
$I->am('the administrator');
$I->wantTo('change theme');

// Before this test upload all the themes to the /theme folder. It's important not to activate any theme before this test!
$I->amOnPage('/oc-panel/auth/login');
$I->fillField('email','admin@reoc.lo');
$I->fillField('password','1234');
$I->click('auth_redirect');
$I->amOnPage('/oc-panel/');
$I->see('welcome admin');

$I->wantTo('activate Splash theme');
$I->amOnPage('/oc-panel/theme');
$I->click('a[href="http://reoc.lo/oc-panel/theme/index/splash"]');
$I->fillField('license','splash');
$I->click('check');
$I->see('Theme activated, thanks.');

$I->wantTo('activate Reclassifieds3 theme');
$I->amOnPage('/oc-panel/theme');
$I->click('a[href="http://reoc.lo/oc-panel/theme/index/reclassifieds3"]');
$I->fillField('license','reclassifieds3');
$I->click('check');
$I->see('Theme activated, thanks.');

$I->wantTo('activate Newspaper theme');
$I->amOnPage('/oc-panel/theme');
$I->click('a[href="http://reoc.lo/oc-panel/theme/index/newspaper"]');
$I->fillField('license','newspaper');
$I->click('check');
$I->see('Theme activated, thanks');

$I->wantTo('activate Czsale theme');
$I->amOnPage('/oc-panel/theme');
$I->click('a[href="http://reoc.lo/oc-panel/theme/index/czsale"]');
$I->fillField('license','czsale');
$I->click('check');
$I->see('Theme activated, thanks');

$I->wantTo('activate Ocean Premium theme');
$I->amOnPage('/oc-panel/theme');
$I->click('a[href="http://reoc.lo/oc-panel/theme/index/ocean"]');
$I->fillField('license','ocean');
$I->click('check');
$I->see('Theme activated, thanks');

$I->amOnPage('/oc-panel/theme');
$I->click('a[href="http://reoc.lo/oc-panel/theme/index/moderndeluxe3"]');
$I->fillField('license','moderndeluxe3');
$I->click('check');
$I->see('Theme activated, thanks');

$I->wantTo('activate Olson theme');
$I->amOnPage('/oc-panel/theme');
$I->click('a[href="http://reoc.lo/oc-panel/theme/index/olson"]');
$I->fillField('license','olson');
$I->click('check');
$I->see('Theme activated, thanks');

$I->wantTo('activate Kamaleon theme');
$I->amOnPage('/oc-panel/theme');
$I->click('a[href="http://reoc.lo/oc-panel/theme/index/kamaleon"]');
$I->fillField('license','kamaleon');
$I->click('check');
$I->see('Theme activated, thanks');

$I->wantTo('activate Mobile theme');
$I->amOnPage('/oc-panel/theme');
$I->click('a[href="http://reoc.lo/oc-panel/theme/index/mobile"]');
$I->fillField('license','mobile');
$I->click('check');
$I->see('Theme activated, thanks');

$I->wantTo('activate Default theme again');
$I->amOnPage('/oc-panel/theme');
$I->click('a[href="http://reoc.lo/oc-panel/theme/index/default"]');
//$I->click('check');
$I->see('Appearance configuration updated');








