<?php

namespace Tests\Acceptance;

use Tests\Support\Step\Acceptance\CRMUserSteps;

class DocumentationCest
{
    public function _before(CRMUserSteps $I)
    {
    }

    // tests
    public function tryToTest(CRMUserSteps $I)
    {
        $I->wantTo('see whether user documentation is accessible');

        $I->amOnPage('/site/docs');
        $I->see('Documentation', 'h1');
        $I->seeLargeBodyOfText();
    }
}
