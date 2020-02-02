<?php

namespace App\Components\Footer;

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

      require 'Footer.phtml';
    }

}
