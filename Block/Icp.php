<?php
namespace Oirad\Icp\Block;

/**
* Icp block
*/
class Icp extends \Magento\Framework\View\Element\Template
{

    /**
     * @var \Oirad\Icp\Helper\Data
     */
    protected $_helper;

    protected $_urlBuilder;

    /**
     * Construct
     *
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = [],
        \Oirad\Icp\Helper\Data $helper
    ) {
        parent::__construct($context, $data);
        $this->_helper = $helper;
    }

    /**
     * @return string
     */
    public function getIcpUrl()
    {
        return $this->_helper->getIcpUrl();
    }

    /**
     * @param string $iconPath
     * return string|false
     */ 
    public function generateIcpIconSrc($iconPath)
    {
        $folderName = \Oirad\Icp\Model\Config\Backend\Image\Icon::UPLOAD_DIR;
        $path = $folderName . '/' . $iconPath;
        $logoUrl = $this->_urlBuilder
                ->getBaseUrl(['_type' => \Magento\Framework\UrlInterface::URL_TYPE_MEDIA]) . $path;
        return $iconPath ? $logoUrl : false;
    }

    /*
     * @return string
     */
    public function getIcpIconSrc()
    {
        return $this->generateIcpIconSrc($this->getIcpIcon());
    }

    /**
     * @return string
     */
    public function getIcpIcon()
    {
        return $this->_helper->getIcpIcon();
    }

    /**
     * @return string
     */
    public function getIcpText()
    {
        return $this->_helper->getIcpText();
    }

    /**
     * @return bool
     */
    public function getIsHidden()
    {
        return $this->_helper->getIsHidden();
    }

}
