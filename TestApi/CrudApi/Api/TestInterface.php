<?php

namespace TestApi\CrudApi\Api;

use TestApi\CrudApi\Api\Data\DataInterface;

interface TestInterface
{

  /**
   * POST for test api
   * @param string[] $data
   * @return string
   */

  public function saveData( $data);

  /**
   * POST for test api
   * @param string[] $data
   * @return string
   */

  public function getAllData();

  /**
   * POST for test api
   * @param string[] $data
   * @return string
   */

  public function deleteById(int $id);

  /**
   * POST for test api
   * @param string[] $data
   * @return string
   */

  public function getById(int $id);

  /**
   * POST for test api
   * @param string[] $data
   * @return string
   */

  public function updateById($id); 

}
