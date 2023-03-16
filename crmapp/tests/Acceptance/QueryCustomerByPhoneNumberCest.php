<?php

namespace Tests\Acceptance;

use Tests\Support\Step\Acceptance\CRMOperatorSteps;
use Tests\Support\Step\Acceptance\CRMUserSteps;

class QueryCustomerByPhoneNumberCest
{
    private static array $customers = [];

    public function createCustomers(CRMOperatorSteps $I)
    {
        $I->wantTo( 'add two different customers to database') ;

        $I->amInAddCustomerUi();
        $firstCustomer = $I->imagineCustomer();
        $I->fillCustomerDataForm($firstCustomer);
        $I->submitCustomerDataForm();
        $I->seeIAmInListCustomersUi();

        $I->amInAddCustomerUi();
        $secondCustomer = $I->imagineCustomer();
        $I->fillCustomerDataForm($secondCustomer);
        $I->submitCustomerDataForm();
        $I->seeIAmInListCustomersUi();

        // Будет работать только если тесты выполняются всегда в этом порядке
        self::$customers = [$firstCustomer, $secondCustomer];
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
