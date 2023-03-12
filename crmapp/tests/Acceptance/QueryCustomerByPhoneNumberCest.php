<?php

namespace Tests\Acceptance;

use Tests\Support\Step\Acceptance\CRMOperatorSteps;
use Tests\Support\Step\Acceptance\CRMUserSteps;

class QueryCustomerByPhoneNumberCest
{
    private static array $customers = [];

    public function _before(CRMOperatorSteps $I)
    {
        $firstCustomer = $I->imagineCustomer();
        $secondCustomer = $I->imagineCustomer();

        self::$customers = [$firstCustomer, $secondCustomer];
    }

    public function createCustomers(CRMOperatorSteps $I)
    {
        $I->wantTo( 'add two different customers to database') ;
        $firstCustomer = self::$customers[0] ?? [];
        $secondCustomer = self::$customers[1] ?? [];

        $I->amInAddCustomerUi();
        $I->fillCustomerDataForm($firstCustomer);
        $I->submitCustomerDataForm();
        $I->seeIAmInListCustomersUi();

        $I->amInAddCustomerUi();
        $I->fillCustomerDataForm($secondCustomer);
        $I->submitCustomerDataForm();
        $I->seeIAmInListCustomersUi();
    }

    public function searchCustomer(CRMUserSteps $I)
    {
        $I->wantTo('query the customer info using his phone number');
        $firstCustomer = self::$customers[0] ?? [];
        $secondCustomer = self::$customers[1] ?? [];

        $I->amInQueryCustomerUi();
        $I->fillInPhoneFieldWithDataFrom($firstCustomer);
        $I->clickSearchButton();

        $I->seeIAmInListCustomersUi();
        $I->seeCustomerInList($firstCustomer);
        $I->dontSeeCustomerInList($secondCustomer);
    }
}
