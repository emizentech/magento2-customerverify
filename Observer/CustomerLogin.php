<?php
namespace EmizenTech\CustomerAttribute\Observer;

use \Magento\Framework\Event\Observer;
use \Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Exception\LocalizedException;

class CustomerLogin implements ObserverInterface
{
    protected $_urlInterface;
    protected $_response;
    protected $_messageManager;


    public function __construct(
        \Magento\Framework\UrlInterface $urlInterface,
        \Magento\Framework\Message\ManagerInterface $messageManager,
        \Magento\Framework\App\ResponseInterface $response
    ) {
        $this->_urlInterface    = $urlInterface;
        $this->_messageManager  = $messageManager;
        $this->_response        = $response;
    }

    public function execute(Observer $observer)
    {
        $customer = $observer->getEvent()->getCustomer();
         if(empty($customer->getCustomAttribute('is_verified')))
         {

           throw new LocalizedException(__('This account is not verified.'));
         }
        
    }
}
