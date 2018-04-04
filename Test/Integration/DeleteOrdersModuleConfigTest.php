<?php
/**
 * Copyright © 2018 SolutionExcel. All rights reserved.
 * See COPYING.txt for license details.
**/

namespace Solutionexcel\DeleteOrders\Test\Integration;

use Magento\Framework\Component\ComponentRegistrar;

class DeleteOrdersModuleConfigTest extends \PHPUnit_Framework_TestCase{
    public function testModuleIsRegisted(){
        $registar = new ComponentRegistrar();
        $this->assertArrayHasKey("Solutionexcel_DeleteOrders", $registar->getPaths(ComponentRegistrar::MODULE));
    }
}

