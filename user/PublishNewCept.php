<?php 
$I = new AcceptanceTester($scenario);
$I->am('the administrator');
$I->wantTo('publish a new ad');

$I->amOnPage('/oc-panel/auth/login');
$I->fillField('email','gazzasdasd@reoc.lo');
$I->fillField('password','1234');
$I->click('auth_redirect');
$I->see('my profile');

$I->amOnPage('/publish-new.html');
$I->see('Publish new advertisement','h1');
$I->fillField('#title',"Admin's ad");
$I->click('.select-category');
$I->fillField('category','18');
$I->fillField('location','57');
$I->fillField('#description','This is a new ad');
$I->attachFile('input[type="file"]', 'photo.jpg');
$I->fillField('#phone','99885522');
$I->fillField('#address','barcelona');
$I->fillField('#price','25');
$I->fillField('#website','https://www.google.com');
//$I->click('submit');
//$I->seeElement('.alert');


//$I->see('This field is required.');

$I->click('Logout'); 