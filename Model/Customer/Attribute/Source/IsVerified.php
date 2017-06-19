<?php
namespace EmizenTech\CustomerAttribute\Model\Customer\Attribute\Source;

class IsVerified extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{

    protected $_optionsData;

    /**
     * getAllOptions
     *
     * @return array
     */
    public function getAllOptions()
    {
        $options = [
                ['value' => (string) '0', 'label' => __('No')],
                ['value' => (string) '1', 'label' => __('Yes')],
            ];

        return $options;
    }
}
