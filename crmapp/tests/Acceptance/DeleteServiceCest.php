<?php

namespace Tests\Acceptance;

use Tests\Support\Step\Acceptance\CRMServicesManagementSteps;

class DeleteServiceCest
{
    public function _before(CRMServicesManagementSteps $I)
    {
    }

    // tests
    public function tryToTest(CRMServicesManagementSteps $I)
    {
        $I->wantTo('check that if i confirm deletion then application deletes service');

        $I->amInCardServiceUi();
//        $I->clickDeleteServiceButton();
//        $I->seeConfirmDialogUi();
    }
}
