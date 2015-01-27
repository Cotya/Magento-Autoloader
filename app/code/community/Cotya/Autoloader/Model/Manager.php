<?php
/**
 * 
 * 
 * 
 * 
 */

namespace Cotya\Autoloader\Model;


class Manager
{

    public function disableMagentoBaseAutoloader()
    {
        spl_autoload_unregister(array(\Varien_Autoload::instance(), 'autoload'));
    }
}

class_alias('Cotya\Autoloader\Model\Manager', 'Cotya_Autoloader_Model_Manager', false);
