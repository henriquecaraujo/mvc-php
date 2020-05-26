<?php

namespace App\Components\Header;

use App\Interfaces\ComponentInterface;

class Controller implements ComponentInterface
{
    public function __construct($parameters = [])
    {
        $this->parameters = $parameters;
    }

    public function render()
    {
      extract($this->parameters);
      
      require 'Header.phtml';
    }

}
