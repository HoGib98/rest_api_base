<?php

namespace TestApi\CrudApi\Controller\Test;

use TestApi\CrudApi\Model\TestTable;

class Save extends \Magento\Framework\App\Action\Action
{
    /**
     * @var TestTableFactory
     */
    protected $_testTableFactory;
    /**
     * @var ResourceModel
     */
    protected $_testResourceModel;
    /**
     * @var Collection
     */
    protected $_collection;
    /**
     * @var PageFactory
     */
    protected $_pageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \TestApi\CrudApi\Model\TestTableFactory $testTableFactory,
        \TestApi\CrudApi\Model\ResourceModel\TestTable $testResourceModel,
        \TestApi\CrudApi\Model\ResourceModel\TestTable\Collection $collection
        // array $data = []
    ) {
        $this->_testTableFactory = $testTableFactory;
        $this->_testResourceModel = $testResourceModel;
        $this->_collection = $collection;
        $this->_pageFactory = $pageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $post = $this->_testTableFactory->create();
		$collection = $post->getCollection();
		foreach($collection as $item){
			echo "<pre>";
			print_r($item->getData());
			echo "</pre>";
		}
		exit();
		return $this->_pageFactory->create();
    }
}
