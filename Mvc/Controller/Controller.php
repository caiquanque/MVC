<?php

class Controller extends Database {

  public static funtion CreateView($viewName) {
    require_once("./Views/$viewName.php");
    static::doSomthing();
  }

}