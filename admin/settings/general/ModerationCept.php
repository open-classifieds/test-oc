<?php 
$I = new AcceptanceTester($scenario);
$I->am('the administrator');
$I->amOnPage('/oc-panel/auth/login');
$I->fillField('email','admin@reoc.lo');
$I->fillField('password','1234');
$I->click('auth_redirect');
$I->amOnPage('/oc-panel/');
$I->see('welcome admin');

// Moderation On
$I->amOnPage('/oc-panel/Config/update/moderation');
$I->see('Update Config','h1');
$I->wantTo('select moderation on');
$I->fillField('#formorm_config_value', '1');
$I->click("//button[@type='submit']"); //click save
$I->see('Item updated. Please to see the changes delete the cache');

$I->amOnPage('/publish-new.html');
$I->see('Publish new advertisement','h1');
$I->fillField('#title',"Moderation On");
$I->click('.select-category');
$I->fillField('category','18');
$I->fillField('location','57');
$I->fillField('#description','This is a new admin ad');
$I->attachFile('input[id="fileInput0"]', 'photo.jpg');
$I->fillField('#phone','99885522');
$I->fillField('#address','barcelona');
$I->fillField('#price','25');
$I->fillField('#website','https://www.admin.com');
$I->click('submit_btn');

$I->see('Advertisement is received, but first administrator needs to validate. Thank you for being patient!');

$I->amOnPage('/oc-panel/ad/moderate');
$I->click('a[class="btn btn-success index-moderation"]');

$I->amOnPage('/apartment/moderation-on.html');
$I->see('Moderation On','h1');
$I->see('25.00','span');
$I->see('Phone: 99885522','a');
$I->see('This is a new admin ad');
$I->see('Barcelona');

// Payment On
$I->amOnPage('/oc-panel/Config/update/moderation');
$I->see('Update Config','h1');
$I->wantTo('select moderation on');
$I->fillField('#formorm_config_value', '2');
$I->click("//button[@type='submit']"); //click save
$I->see('Item updated. Please to see the changes delete the cache');

$I->amOnPage('/publish-new.html');
$I->see('Publish new advertisement','h1');
$I->fillField('#title',"Moderation On");
$I->click('.select-category');
$I->fillField('category','18');
$I->fillField('location','57');
$I->fillField('#description','This is a new admin ad');
$I->attachFile('input[id="fileInput0"]', 'photo.jpg');
$I->fillField('#phone','99885522');
$I->fillField('#address','barcelona');
$I->fillField('#price','25');
$I->fillField('#website','https://www.admin.com');
$I->click('submit_btn');

$I->see('Advertisement is received, but first administrator needs to validate. Thank you for being patient!');



























