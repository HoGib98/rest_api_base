<?php

namespace TestApi\CrudApi\Model\ResourceModel\TestTable;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init(\TestApi\CrudApi\Model\TestTable::class, \TestApi\CrudApi\Model\ResourceModel\TestTable::class);
    }
}