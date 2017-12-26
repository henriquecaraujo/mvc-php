<?php

namespace App\Models;

use App\Core\Model;

class Categories extends Model
{
  /**
   * Return all categories.
   * @return Array Categories:class
   */
  public function all()
  {
    $query = parent::Database()->prepare("SELECT * FROM produto");

    return $query->execute() ? $query->fetchAll(\PDO::FETCH_OBJ) : false;
  }
}
