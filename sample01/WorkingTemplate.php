<?php
namespace sample01;
require_once './sample01/Template.php';

use sample01\Template;

class WorkingTemplate implements Template {
  private $vars =[];

  public function setValiable($name, $var) {
    $this->vars[$name] = $var;
  }

  public function getHtml($template) {
    foreach ($this->vars as $name => $value) {
      $template = str_replace('{'.$name.'}', $value, $template);
    }
    return "{$template}\n";
  }
}