<?php
namespace sample01;

interface Template {
  public function setValiable($name, $var);
  public function getHtml($template);
}
