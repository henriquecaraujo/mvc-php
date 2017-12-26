<?php

namespace App\Core;

class App
{
  protected $controller = 'Home';
  protected $method = 'index';
  protected $params = array();

  public function __construct()
  {
      $url = $this->createController($this->parse());

      if (isset($url[1])) {
          $url[1] = str_replace('-', '_', $url[1]);
      }

      if (isset($url[1]) && method_exists($this->controller, $url[1])) {

          $this->method = $url[1];
          unset($url[1]);
      }

      $this->params = $url ? array_values($url) : array();
  }

  public function run()
  {
      call_user_func_array([$this->controller, $this->method], $this->params);
  }

  public function parse()
  {
      $url = filter_input(INPUT_GET, 'url');
      $filteredUrl = filter_var(rtrim($url, '/'), FILTER_SANITIZE_URL);

      if (isset($filteredUrl)) {
          return explode('/', $filteredUrl);
      }
  }

  private function createController($url)
  {
      $url[0] = str_replace('-', '_', $url[0]);

      if (class_exists('App\\Controllers\\' . ucfirst($url[0]))) {
          $this->controller = ucfirst($url[0]);
          unset($url[0]);
      }

      $controlador = 'App\\Controllers\\' . $this->controller;
      $this->controller = new $controlador;

      return $url;
  }
}
