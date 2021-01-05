<?php

namespace Magento\Framework;

use TestApi\CrudApi\Model\TestTableFactory;
use TestApi\CrudApi\Model\ResourceModel\TestTable;
use TestApi\CrudApi\Api\Data\DataInterface;

class Test implements \TestApi\CrudApi\Api\TestInterface
{
    protected $_testTableFactory;
    protected $_testResourceModel;
    protected $_request;
    
    public function __construct(
        TestTableFactory $testTableFactory,
        TestTable $testResourceModel,
        \Magento\Framework\App\RequestInterface $request
    ) {
        $this->_testTableFactory = $testTableFactory;
        $this->_testResourceModel = $testResourceModel;
        $this->_request = $request;
    }
    
    /**
     * {@inheritdoc}
     */
    public function saveData($data)
    {
        $createCollection = $this->_testTableFactory->create();
        try {
            if (!empty($data['id'])) {
                $createCollection->setData("id", $data['id']);
            }
            $createCollection->setData("name", $data['name']);
            $createCollection->setData("number", $data['number']);
            $createCollection->setData("city", $data['city']);
            $createCollection->save();
            return "Saved"; 
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAllData()
    {
        $createCollection = $this->_testTableFactory->create();
        try {
            $collection = $createCollection->getCollection()->getData();
            return $collection;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById(int $id){
        // $id = (int) $id;
        $createCollection = $this->_testTableFactory->create();
        try {
            $createCollection->load($id)->delete();;
            return "deleted";
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getById(int $id){
        $model = $this->_testTableFactory->create();
        $this->_testResourceModel->load($model, $id);
        return $model->getData();
    }

    /**
     * {@inheritdoc}
     */
    public function updateById($id){

    }
}
