# Automated Testing for OC

## Download Codeception

Download the phar file to the root of your web application (inside /oc/):

    wget http://codeception.com/codecept.phar

## Install

Open console directory where you saved codecept.phar file and execute:

    php codecept.phar bootstrap

## Configure Acceptance Tests

Put application URL into:  tests/acceptance.suite.yml 

    class_name: AcceptanceTester
    modules:
        enabled:
            - PhpBrowser:
                url: '{YOUR APP'S URL}'
            - \Helper\Acceptance
            

and clone repo and copy the tests into /oc/tests/acceptance/

## Before running tests

+ Install Open Classifieds

admin:<br>
Email: admin@reoc.lo<br>
Password: 1234

+ Import [these ads](https://mega.nz/#!A41ghCJL!dDIXPWZ9NOvRscw0STOsYNoOMGH6dAtk6Atcc1pD2LI).

+ Edit users:

Name: Jermain Doe<br>
Password: 1234

Name: Gary Doe<br>
Password: 1234

Name: John Smith<br>
Password: 1234

+ Upload an image named "photo.jpg" to /oc/tests/_data/

## Run Tests

Codeception are executed with 'run' command:

    php codecept.phar run
    
To run only acceptance tests:

    php codecept.phar run acceptance
    
To see step-by-step report on the performed actions of the tests execute this command:

    php codecept.phar run --steps
    
To generate JUnit XML output, you can provide the --xml option, and --html for HTML report:

    php codecept.phar run --steps --xml --html
    
To see more available options execute this command:

    php codecept.phar help run
    
Run single test: (for example)

    php codecept.phar run acceptance RegisterCept --steps
    
## Generate scenarios

Generates user-friendly text scenarios from scenario-driven tests.

    php codecept.phar g.scenarios acceptance --path tests/docs
    

    
