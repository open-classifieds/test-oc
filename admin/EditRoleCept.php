<?php 
$I = new AcceptanceTester($scenario);
$I->am("the admin");
$I->wantTo('edit roles and see the changes');

$I->amOnPage('/oc-panel/auth/login');
$I->fillField('email','admin@reoc.lo');
$I->fillField('password','1234');
$I->click('auth_redirect');
$I->amOnPage('/oc-panel/');
$I->see('welcome admin');



// Update
$I->amOnPage('/oc-panel/Role/update/1');
$I->unCheckOption('profile|*');
$I->checkOption('profile|index');
$I->checkOption('profile|changepass');
$I->checkOption('profile|edit');
$I->checkOption('profile|notifications');
$I->checkOption('profile|public');
$I->checkOption('profile|ads');
$I->checkOption('profile|deactivate');
$I->checkOption('profile|activate');
$I->checkOption('profile|update');
$I->checkOption('profile|confirm');
$I->checkOption('profile|stats');
$I->click('submit');
$I->see('Item updated');

$I->amOnPage('/');
$I->click('Logout');


//login as a user
$I->amOnPage('/oc-panel/auth/login');
$I->fillField('email','gazzasdasd@reoc.lo');
$I->fillField('password','1234');
$I->click('auth_redirect');

// Read
// Subscribe - Unsubscribe
$I->amOnPage('/');
$I->click('a[href="http://reoc.lo/oc-panel/profile/subscriptions"]');
$I->seeElement('.alert.alert-danger');
$I->see('You do not have permissions to access Profile subscriptions');
// Image
$I->amOnPage('/oc-panel/profile/edit');
$I->attachFile('input[type="file"]', 'photo.jpg');
$I->click("//form[contains(@action,'http://reoc.lo/oc-panel/profile/image')]/div/div/button[@type='submit']");
$I->seeElement('.alert.alert-danger');
$I->see('You do not have permissions to access Profile image');
// Favorites
$I->amOnPage('/');
$I->click('a[href="http://reoc.lo/oc-panel/profile/favorites"]');
$I->seeElement('.alert.alert-danger');
$I->see('You do not have permissions to access Profile favorites');
// Orders
$I->amOnPage('/');
$I->click('a[href="http://reoc.lo/oc-panel/profile/orders"]');
$I->seeElement('.alert.alert-danger');
$I->see('You do not have permissions to access Profile orders');

// Back to default
$I->amOnPage('/');
$I->click('Logout');

$I->amOnPage('/oc-panel/auth/login');
$I->fillField('email','admin@reoc.lo');
$I->fillField('password','1234');
$I->click('auth_redirect');
$I->amOnPage('/oc-panel/');
$I->see('welcome admin');

$I->amOnPage('/oc-panel/Role/update/1');
$I->checkOption('profile|*');
$I->unCheckOption('profile|index');
$I->unCheckOption('profile|changepass');
$I->unCheckOption('profile|edit');
$I->unCheckOption('profile|notifications');
$I->unCheckOption('profile|public');
$I->unCheckOption('profile|ads');
$I->unCheckOption('profile|deactivate');
$I->unCheckOption('profile|activate');
$I->unCheckOption('profile|update');
$I->unCheckOption('profile|confirm');
$I->unCheckOption('profile|stats');
$I->click('submit');
$I->see('Item updated');

$I->amOnPage('/');
$I->click('Logout');


//login as a user
$I->amOnPage('/oc-panel/auth/login');
$I->fillField('email','gazzasdasd@reoc.lo');
$I->fillField('password','1234');
$I->click('auth_redirect');


// Read
// Subscribe - Unsubscribe
$I->amOnPage('/');
$I->click('a[href="http://reoc.lo/oc-panel/profile/subscriptions"]');
$I->dontSeeElement('.alert.alert-danger');
$I->dontSee('You do not have permissions to access Profile subscriptions');
$I->seeElement('.alert.alert-info');
$I->see('No Subscriptions');
// Image
$I->amOnPage('/oc-panel/profile/edit');
$I->attachFile('input[type="file"]', 'photo.jpg');
$I->click("//form[contains(@action,'http://reoc.lo/oc-panel/profile/image')]/div/div/button[@type='submit']");
$I->dontSeeElement('.alert.alert-danger');
$I->dontSee('You do not have permissions to access Profile image');
$I->seeElement('.alert.alert-success');
$I->see('photo.jpg Image is uploaded.');
$I->click('photo_delete');
$I->seeElement('.alert.alert-success');
$I->see('Photo deleted.');
// Favorites
$I->amOnPage('/');
$I->click('a[href="http://reoc.lo/oc-panel/profile/favorites"]');
$I->dontSeeElement('.alert.alert-danger');
$I->dontSee('You do not have permissions to access Profile favorites');
$I->see('My favorites','h1');
// Orders
$I->amOnPage('/');
$I->click('a[href="http://reoc.lo/oc-panel/profile/orders"]');
$I->dontSeeElement('.alert.alert-danger');
$I->dontSee('You do not have permissions to access Profile orders');
$I->see('Orders','h1');

$I->amOnPage('/');
$I->click('Logout');
