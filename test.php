<?php
declare(strict_types=1);
namespace BeamSuntory\CustomPricing\Helper;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
class Data extends AbstractHelper
{
    /**
     * @var CollectionFactory
     */
    protected CollectionFactory $productCollectionFactory;
    /**
     * @param Context $context
     * @param CollectionFactory $productCollectionFactory
     */
    public function __construct(
        Context $context,
        CollectionFactory $productCollectionFactory
    ) {
        parent::__construct($context);
        $this->productCollectionFactory = $productCollectionFactory;
    }
    /**
     * @return string[]|int[]
     */
    public function getActiveProductIds(): array
    {
        $collection = $this->productCollectionFactory->create();
        return $collection->getAllIds();
    }
    public function testCodacyRules( ) {
        $array = array( 'one' , 'two' , 'three' );
        foreach( $array as $key=>$value ) { echo $key . '=>' . $value . ' '; }
        if(true){
            echo 'This is a test';
        }
        $aaa = array();
        foreach ($array as $key => $value) {
            array_push($aaa, $value);
        }
        return true;
    }
}