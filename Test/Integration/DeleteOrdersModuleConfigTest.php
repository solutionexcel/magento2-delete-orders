<?php
/**
 * @package     Solutionexcel_SocialShare
 * @author      SolutionExcel - https://www.solutionexcel.com/ - info@solutionexcel.com
 * @copyright   Copyright © 2018 SolutionExcel. All rights reserved.
 * @license     https://opensource.org/licenses/AFL-3.0  Academic Free License 3.0 | Open Source Initiative
**/

namespace Solutionexcel\DeleteOrders\Test\Integration;

use Magento\Framework\Component\ComponentRegistrar;

class DeleteOrdersModuleConfigTest extends \PHPUnit_Framework_TestCase{
    public function testModuleIsRegisted(){
        $registar = new ComponentRegistrar();
        $this->assertArrayHasKey("Solutionexcel_DeleteOrders", $registar->getPaths(ComponentRegistrar::MODULE));
    }
}

