<?php


class CestShowPostCest
{

    // tests
    public function tryToTest(FunctionalTester $I)
    {
        $I->am('a Guest');
        $I->wantTo('show page');

        $I->amOnPage('/');
        $I->click('.widget-products li:first-child > a');
        $I->seeElement('img');
    }
}
