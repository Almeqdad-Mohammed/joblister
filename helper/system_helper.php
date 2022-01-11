<?php

// Create  REdirect Function TO PAge
  function redirect($page = FALSE , $message = NULL , $message_type = NULL){
    // check if page is string
    if (is_string($page)) {
      $location  = $page;
    }else {
      $location = $_SERVER['SCRIPT_NAME'];
    }
    //check for  message
    if ($message != NULL) {
      $_SESSION['message'] = $message;
    }
    // check for type message
    if ($message_type != NULL) {
      $_SESSION['message_type'] = $message_type;
    }

    // Now Call REdirect Function
    header('location:'. $location);
    exit();
  }

  // Function display THe MEssage
  function displayMessage(){
    if (!empty($_SESSION['message'])) {
      // Assign THe Message Var
      $message = $_SESSION['message'];
      if (!empty($_SESSION['message_type'])) {
        // Assign Type Var
        $message_type = $_SESSION['message_type'];
        // Create Output
        if ($message_type == 'error') {
          echo "<div class='alert alert-danger'>" . $message . "</div>";
        }else {
          echo "<div class='alert alert-success'>" . $message . "</div>";
        }
      }
      // Unset THe Message
      unset($_SESSION['message']);
      unset($_SESSION['message_type']);
    }else {
      echo "";
    }
  }
