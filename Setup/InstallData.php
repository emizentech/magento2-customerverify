<?php
namespace EmizenTech\CustomerAttribute\Setup;

use Magento\Customer\Model\Customer;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Customer\Setup\CustomerSetupFactory;

class InstallData implements InstallDataInterface
{

    private $customerSetupFactory;

    /**
     * Constructor
     *
     * @param \Magento\Customer\Setup\CustomerSetupFactory $customerSetupFactory
     */
    public function __construct(
        CustomerSetupFactory $customerSetupFactory
    ) {
        $this->customerSetupFactory = $customerSetupFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function install(
        ModuleDataSetupInterface $setup,
        ModuleContextInterface $context
    ) {

        $customerSetup = $this->customerSetupFactory->create(['setup' => $setup]);
            
            $customerSetup->addAttribute('customer', 'is_verified', [
                'type' => 'varchar',
                'label' => 'Is Verified',
                'input' => 'select',
                'source' => 'EmizenTech\CustomerAttribute\Model\Customer\Attribute\Source\IsVerified',
                'required' => false,
                'visible' => true,
                'position' => 333,
                'system' => false,
                'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend'
            ]);

            
            $attribute = $customerSetup->getEavConfig()->getAttribute('customer', 'is_verified')
                ->addData(['used_in_forms' => [
                    'adminhtml_customer',
                    'customer_account_edit',
                    'adminhtml_checkout'
                ]]);
            $attribute->save();
    }
}
