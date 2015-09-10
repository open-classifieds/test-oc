# Automated Testing for OC

## Instructions


1. Install Open Classifieds. 

    Admin must have:<br>
    Email: admin@reoc.lo<br>
    Password: 1234

2. Upload all premium themes into /themes folder.

3. Download [this file](https://mega.nz/#!A41ghCJL!dDIXPWZ9NOvRscw0STOsYNoOMGH6dAtk6Atcc1pD2LI) and upload it On panel, Tools -> Import. Then, click PROCESS. 

4. From the root of the installation run this command:

        cd oc


5. Download codeception:

        wget http://codeception.com/codecept.phar


6. Install codeception:

        php codecept.phar bootstrap


7. Open the configuration file to edit your application URL

        vim tests/acceptance.suite.yml


    Edit line 11 to:

        url: http://reoc.lo


    Now, your acceptance.suite.yml must look like this: 

        # Codeception Test Suite Configuration
        #
        # Suite for acceptance tests.
        # Perform tests in browser using the WebDriver or PhpBrowser.
        # If you need both WebDriver and PHPBrowser tests - create a separate suite.

        class_name: AcceptanceTester
        modules:
            enabled:
                - PhpBrowser:
                    url: http://reoc.lo
                - \Helper\Acceptance


8. Clone tests into the acceptance tests directory:

        cd tests/acceptance/
        git clone https://github.com/open-classifieds/test-oc.git


9. Move oc/tests/acceptance/test-oc/photo.jpg to oc/tests/_data/

        mv test-oc/photo.jpg ../_data/


10. Go to the /oc directory, to run the first test:

        cd ../..
        php codecept.phar run acceptance test-oc/admin/SetUsersPasswordsCept


    This test changes the passwords of users.


11. Run all the tests:

        php codecept.phar run acceptance

    To see all the steps for each test run this command (Optional, not recommended for this case)

        php codecept.phar run acceptance --steps



    
## Generate scenarios

Generates user-friendly text scenarios from scenario-driven tests.

    php codecept.phar g.scenarios acceptance --path tests/docs
    

    

