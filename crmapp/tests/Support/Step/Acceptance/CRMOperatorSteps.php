<?php

declare(strict_types=1);

namespace Tests\Support\Step\Acceptance;

use Faker\Factory;
use Tests\Support\AcceptanceTester;

class CRMOperatorSteps extends AcceptanceTester
{
    public function amInAddCustomerUi()
    {
        $I = $this;
        $I->amOnPage('/customers/add');
    }

    public function imagineCustomer(): array
    {
        $faker = Factory::create();

        return [
            'CustomerRecord[name]' => $faker->name,
            'CustomerRecord[birth_date]' => $faker->date('Y-m-d'),
            'CustomerRecord[notes]' => $faker->realText(10),
            'PhoneRecord[number]' => $faker->phoneNumber,
        ];
    }

    public function fillCustomerDataForm(array $fieldData)
    {
        $I = $this;

        foreach ($fieldData as $key => $value) {
            $I->fillField($key, $value);
        }
    }

    public function submitCustomerDataForm()
    {
        $I = $this;
        $I->click('Submit');
    }

    public function seeIAmInListCustomersUi()
    {
        $I = $this;
        $I->seeCurrentUrlMatches('/customers/');
    }
}
