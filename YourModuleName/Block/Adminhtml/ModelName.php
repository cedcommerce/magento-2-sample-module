<?php
namespace YourCompanyName\YourModuleName\Block\Adminhtml;
class ModelName extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
		
        $this->_controller = 'adminhtml_modelname';/*block grid.php directory*/
        $this->_blockGroup = 'YourCompanyName_YourModuleName';
        $this->_headerText = __('ModelName');
        $this->_addButtonLabel = __('Add New Entry'); 
        parent::_construct();
		
    }
}