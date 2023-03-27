<?php

declare(strict_types=1);

namespace Tests\Support\Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

use Codeception\Module;
use Codeception\Lib\Di;
use Codeception\Lib\ModuleContainer;

class AcceptanceHelper extends Module
{
    public function __construct(array $config = [])
    {
        $moduleContainer = new ModuleContainer(new Di(), $config);
        parent::__construct($moduleContainer, $config);
        $this->moduleContainer = $moduleContainer;
    }

    public function seeContentIsLong($content, $triggerLength = 100)
    {
        $this->assertGreaterThan($triggerLength, strlen($content));
    }
}
