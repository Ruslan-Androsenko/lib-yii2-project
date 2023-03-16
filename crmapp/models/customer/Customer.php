<?php

namespace app\models\customer;

class Customer
{
    /** @var string */
    public $name;

    /** @var \DateTime */
    public $birth_date;

    /** @var string */
    public $notes;

    /** @var Phone[] */
    public $phones = [];

    public function __construct($name, $birthDate)
    {
        $this->name = $name;
        $this->birth_date = $birthDate;
    }
}