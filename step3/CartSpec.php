<?php
interface CartSpec {
  public function getCode() : string;
  public function getName() : string;
  public function getPrice() : int;
}