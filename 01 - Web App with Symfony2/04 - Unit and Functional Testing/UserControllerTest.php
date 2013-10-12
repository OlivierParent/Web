<?php

namespace Ahs\BlogBundle\Tests\Controller;

use Ahs\BlogBundle\Controller\UserController;

class UserControllerTest extends \PHPUnit_Framework_TestCase
{
    public function testIndex()
    {
        $controller = new UserController();
        $this->assertGreaterThanOrEqual(1, $controller->indexAction());
    }
}
