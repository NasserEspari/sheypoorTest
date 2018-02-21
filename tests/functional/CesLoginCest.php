<?php


class CesLoginCest
{

    // tests
    public function tryToTest(FunctionalTester $I)
    {
        $I->am('user');
        $I->wantTo('Login to page');

        $I->amOnPage('/login');
        $I->fillField('email', 'nasser.esparipour@gmail.com');
        $I->fillField('password', '123456');
        $I->click('Sign in');
        $I->see('Welcome To Dashboard');
    }
}
