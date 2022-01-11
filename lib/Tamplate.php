<<?php

class Tamplate {
  // the parameter  of this class
  protected $template;
  // var of variable
  protected $vars  = array();

  // create the  construct
  public function __construct($template){
    $this->template = $template;
  }

  // make get function
  public function __get($key){
    return $this->vars[$key];
  }

  // make set function
  public function __set($key, $value){
    $this->vars[$key] = $value;
  }

  // make tostring function to convert the vars in the page
  public function __toString(){
    extract($this->vars);
    chdir(dirname($this->template));

    // include ob_start  and obtain with it
    ob_start();

    include basename($this->template);

   return  ob_get_clean();
  }
}




 ?>
