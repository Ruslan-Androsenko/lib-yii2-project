<?php

namespace Tests\Acceptance;

use Tests\Support\Step\Acceptance\CRMServicesManagementSteps;

class EditServiceCest
{
    public function _before(CRMServicesManagementSteps $I)
    {
    }

    // tests
    public function tryToTest(CRMServicesManagementSteps $I)
    {
        $I->wantTo('edit existing service record');

        $I->amInEditServiceUi();
        $newService = $I->imagineService();
        $I->fillServiceDataForm($newService);
        $I->submitServiceDataForm();
        $I->seeIAmInServiceUi();
    }
}
