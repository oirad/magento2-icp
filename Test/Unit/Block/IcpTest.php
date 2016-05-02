<?php
namespace Oirad\Icp\Test\Unit\Block;

class IcpTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Magento\Theme\Block\Icp
     */
    protected $block;

    protected function setUp()
    {
        $objectManager = new \Magento\Framework\TestFramework\Unit\Helper\ObjectManager($this);
        $this->block = $objectManager->getObject('Oirad\Icp\Block\Icp');
    }

    protected function tearDown()
    {
        $this->block = null;
    }

    public function testGenerateIcpIconStr()
    {
        $this->assertEquals(
            \Oirad\Icp\Model\Config\Backend\Image\Icon::UPLOAD_DIR . '/' . 'testfile.png';,
            $this->block->generateIcpIconStr('testfile.png');
        );
    }
}

