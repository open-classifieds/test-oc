<?php 
$I = new AcceptanceTester($scenario);
$I->am("the admin");
$I->wantTo('change configurations and see changes on frontend');

$I->amOnPage('/oc-panel/auth/login');
$I->fillField('email','admin@reoc.lo');
$I->fillField('password','1234');
$I->click('auth_redirect');
$I->amOnPage('/oc-panel/');
$I->see('welcome admin');


// Contact Form
$I->amOnPage('/oc-panel/Config/update/contact');
$I->fillField('#formorm_config_value','0');
$I->click('button[type="submit"]');
$I->see('Item updated. Please to see the changes delete the cache');
//Read
$I->amOnPage('/jobs/just-random-title-here.html');
$I->dontSee('Send Message');
$I->dontSee('Phone: 8848585', 'a');

// Back to default
$I->amOnPage('/oc-panel/Config/update/contact');
$I->fillField('#formorm_config_value','1');
$I->click('button[type="submit"]');
$I->see('Item updated. Please to see the changes delete the cache');
//Read
$I->amOnPage('/jobs/just-random-title-here.html');
$I->see('Send Message');
$I->see('Phone: 8848585', 'a');



// Require login to contact
$I->amOnPage('/oc-panel/Config/update/login_to_contact');
$I->fillField('#formorm_config_value','1');
$I->click('button[type="submit"]');
$I->see('Item updated. Please to see the changes delete the cache');
//Read
$I->amOnPage('/');
$I->click('Logout');

$I->amOnPage('/jobs/just-random-title-here.html');
$I->seeElement('a', ['href' => 'http://reoc.lo/oc-panel/auth/login#login-modal']);

// Back to default
$I->amOnPage('/oc-panel/auth/login');
$I->fillField('email','admin@reoc.lo');
$I->fillField('password','1234');
$I->click('auth_redirect');
$I->amOnPage('/oc-panel/');
$I->see('welcome admin');

$I->amOnPage('/oc-panel/Config/update/login_to_contact');
$I->fillField('#formorm_config_value','0');
$I->click('button[type="submit"]');
$I->see('Item updated. Please to see the changes delete the cache');
//Read
$I->amOnPage('/jobs/just-random-title-here.html');
$I->dontSeeElement('a', ['href' => 'http://reoc.lo/oc-panel/auth/login#login-modal']);
