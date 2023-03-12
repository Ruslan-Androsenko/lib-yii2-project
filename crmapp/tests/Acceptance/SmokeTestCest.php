<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class SmokeTestCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantTo('See that landing page is up');
        $I->amOnPage('/');
        $I->see('Our CRM');
    }
}
