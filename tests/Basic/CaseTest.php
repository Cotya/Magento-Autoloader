<?php

namespace MagentoHackathon\Autoloader\Test\Basic;

class CaseTest extends \PHPUnit_Framework_TestCase
{

    public function testGetModel()
    {
        $model = \Mage::getModel('core/url');
        $this->assertTrue(!!$model);
    }

    public function testGetAutoloaderModel()
    {
        $model = \Mage::getModel('psr0autoloader/Observer');
        $this->assertTrue(!!$model);
    }

    public function testGetNamespacedAliasedModel()
    {
        try{
            $model = \Mage::getModel('Cotya_Autoloader_Model_Manager');
        }catch(\Exception $e){
            $this->fail($e->getMessage());
        }
        $this->assertTrue(!!$model);
        $this->assertInstanceOf('Cotya\Autoloader\Model\Manager', $model);
    }
}
