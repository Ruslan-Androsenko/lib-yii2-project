<?php

declare(strict_types=1);

namespace Tests\Support\Step\Acceptance;

use Tests\Support\AcceptanceTester;
use Tests\Support\Helper\AcceptanceHelper;

class CRMUserSteps extends AcceptanceTester
{
    public function amInQueryCustomerUi()
    {
        $I = $this;
        $I->amOnPage('/customers/query');
    }

    public function fillInPhoneFieldWithDataFrom(array $customerData)
    {
        $I = $this;
        $I->fillField('PhoneRecord[number]', $customerData['PhoneRecord[number]']);
    }

    public function clickSearchButton()
    {
        $I = $this;
        $I->click('Search');
    }

    public function seeIAmInListCustomersUi()
    {
        $I = $this;
        $I->seeCurrentUrlMatches('/customers/');
    }

    public function seeCustomerInList(array $customerData)
    {
        $I = $this;
        $I->see($customerData['CustomerRecord[name]'], '#search_results');
    }

    public function dontSeeCustomerInList(array $customerData)
    {
        $I = $this;
        $I->dontSee($customerData['CustomerRecord[name]'], '#search_results');
    }

    public function seeLargeBodyOfText()
    {
        $I = $this;
        $text = $I->grabTextFrom('p');
        $helper = new AcceptanceHelper();
        $helper->seeContentIsLong($text);

    }
}
