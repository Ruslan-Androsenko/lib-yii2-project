<?php

namespace Tests\Acceptance;

use Tests\Support\Step\Acceptance\CRMServicesManagementSteps;

class RegisterNewServiceCest
{
    public function _before(CRMServicesManagementSteps $I)
    {
    }

    // tests
    public function tryToTest(CRMServicesManagementSteps $I)
    {
        $I->wantTo('register two services in database');

        $I->amInAddServiceUi();
        $firstService = $I->imagineService();
        $I->fillServiceDataForm($firstService);
        $I->submitServiceDataForm();
        $I->seeIAmInServiceUi();

        $I->amInAddServiceUi();
        $secondService = $I->imagineService();
        $I->fillServiceDataForm($secondService);
        $I->submitServiceDataForm();
        $I->seeIAmInServiceUi();
    }
}
