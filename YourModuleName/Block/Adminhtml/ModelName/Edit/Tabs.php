<?php
namespace YourCompanyName\YourModuleName\Block\Adminhtml\ModelName\Edit;

class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    protected function _construct()
    {
		
        parent::_construct();
        $this->setId('checkmodule_modelname_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('ModelName Information'));
    }
}