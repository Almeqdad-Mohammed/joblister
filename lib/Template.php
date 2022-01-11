<?php 

    class Template {
        // set the variable to path template
        protected $template;
        // the array variable of the varibale of each 
        protected $vars = array();
        
        //set the constructor function 

        public function __construct($template){
            $this->template = $template;
        }

        // set get function

        public function __get($key){
            return $this->vars[$key];
        }

        // set set function 

        public function __set($key , $value) {
            $this->vars[$key] = $value;
        }

        // extract this tepmlate 

        public function __toString(){
            extract($this->vars);
            chdir(dirname($this->template));

            ob_start();

                include basename($this->template);

            return ob_get_clean();
        }
    }


?>