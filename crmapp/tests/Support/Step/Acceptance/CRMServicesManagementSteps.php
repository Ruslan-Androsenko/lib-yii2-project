<?php

declare(strict_types=1);

namespace Tests\Support\Step\Acceptance;

use Faker\Factory;
use Tests\Support\AcceptanceTester;

class CRMServicesManagementSteps extends AcceptanceTester
{
    public function amInAddServiceUi()
    {
        $I = $this;
        $I->amOnPage('/services/create');
    }

    public function amInEditServiceUi()
    {
        $I = $this;
        $I->amOnPage('/services/update?id=1');
    }

    public function amInCardServiceUi()
    {
        $I = $this;
        $I->amOnPage('/services/view?id=36');
    }

    public function imagineService()
    {
        $faker = Factory::create();

        return [
            'ServiceRecord[name]' => $faker->unique()->sentence(4),
            'ServiceRecord[hourly_rate]' => $faker->randomDigitNotZero(),
        ];
    }

    public function fillServiceDataForm(array $fieldData)
    {
        $I = $this;

        foreach ($fieldData as $key => $value) {
            $I->fillField($key, $value);
        }
    }

    public function submitServiceDataForm()
    {
        $I = $this;
        $I->click('Save');
    }

    public function clickDeleteServiceButton()
    {
        $I = $this;
        $I->click('Delete');
    }

    public function seeConfirmDialogUi()
    {
        $I = $this;
        $I->click('OK');

    }

    public function seeIAmInServiceUi()
    {
        $I = $this;
        $I->seeCurrentUrlMatches('/services/');
    }
}
