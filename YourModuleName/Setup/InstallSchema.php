<?php
/**
 * Copyright © 2015 YourCompanyName. All rights reserved.
 */

namespace YourCompanyName\YourModuleName\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
	
        $installer = $setup;

        $installer->startSetup();

		/**
         * Create table 'yourmodulename_modelname'
         */
        $table = $installer->getConnection()->newTable(
            $installer->getTable('yourmodulename_modelname')
        )
		->addColumn(
            'id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
            'yourmodulename_modelname'
        )
		->addColumn(
            'column1',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            '64k',
            [],
            'column1'
        )
		->addColumn(
            'column2',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            '64k',
            [],
            'column2'
        )
		->addColumn(
            'column3',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            '64k',
            [],
            'column3'
        )
		/*{{CedAddTableColumn}}}*/
		
		
        ->setComment(
            'YourCompanyName YourModuleName yourmodulename_modelname'
        );
		
		$installer->getConnection()->createTable($table);
		/*{{CedAddTable}}*/

        $installer->endSetup();

    }
}
