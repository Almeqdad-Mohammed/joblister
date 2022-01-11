<?php
// Start Session
  session_start();
// include confige file
  include 'config.php';
// include helper folder
  include_once 'helper/system_helper.php';
/// Create AUto Load Function Class
function __autoload($class_name){
  require_once 'lib/' . $class_name . '.php';
}
