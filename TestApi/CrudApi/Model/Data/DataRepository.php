<?php
namespace TestApi\CrudApi\Model\Data;

use TestApi\CrudApi\Api\Data\DataInterface;
use Magento\Framework\DataObject;

class DataRepository extends DataObject implements DataInterface
{

    /**
     * {@inheritdoc}
     */
    public function setId($id){
        return $this->setData('id', $id);
    }

    /**
     * {@inheritdoc}
     */
    public function setName($name){
        return $this->setData('name', $name);
    }

    /**
     * {@inheritdoc}
     */
    public function setNumber($number){
        return $this->setData('number', $number);
    }

    /**
     * {@inheritdoc}
     */
    public function setCity($city){
        return $this->setData('city', $city);
    }

    /**
     * {@inheritdoc}
     */
    public function getId(){
        return $this->getData('id');
    }

    /**
     * {@inheritdoc}
     */
    public function getName(){
        return $this->getData('name');
    }

    /**
     * {@inheritdoc}
     */
    public function getNumber(){
        return $this->getData('number');
    }

    /**
     * {@inheritdoc}
     */
    public function getCity(){
        return $this->getData('city');
    }

}