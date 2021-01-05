<?php
namespace TestApi\CrudApi\Api\Data;

interface DataInterface
{


    /**
     * {@inheritdoc}
     */
    public function setId($id);

    /**
     * {@inheritdoc}
     */
    public function setName($name);

    /**
     * {@inheritdoc}
     */
    public function setNumber($number);

    /**
     * {@inheritdoc}
     */
    public function setCity($city);

    /**
     * {@inheritdoc}
     */
    public function getId();

    /**
     * {@inheritdoc}
     */
    public function getName();

    /**
     * {@inheritdoc}
     */
    public function getNumber();

    /**
     * {@inheritdoc}
     */
    public function getCity();
}