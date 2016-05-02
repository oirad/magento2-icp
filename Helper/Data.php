<?php namespace Oirad\Icp\Helper;
 
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{

    CONST ICP_URL   = 'general/store_information/icp_url';
    CONST ICP_ICON  = 'general/store_information/icp_icon';
    CONST ICP_TEXT  = 'general/store_information/icp_text';
    CONST HIDDEN    = 'general/store_information/icp_hidden';
 
    public function __construct(
        \Magento\Framework\App\Helper\Context $context
    ) {
        parent::__construct($context);
    }
 
    public function getIcpUrl(){
        return $this->scopeConfig->getValue(self::ICP_URL);
    }
 
    public function getIcpIcon(){
        return $this->scopeConfig->getValue(self::ICP_ICON);
    }

    public function getIcpText(){
        return $this->scopeConfig->getValue(self::ICP_TEXT);
    }

    public function getIsHidden(){
        return $this->scopeConfig->getValue(self::HIDDEN);
    }
}
