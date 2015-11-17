<?php
/**
 * Copyright © 2015 YourCompanyName. All rights reserved.
 */
namespace YourCompanyName\YourModuleName\Model\ResourceModel;

/**
 * ModelName resource
 */
class ModelName extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('yourmodulename_modelname', 'id');
    }

  
}
