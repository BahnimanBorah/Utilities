<?php
  

  class Validate{
     
    function verify($firstname,$surname,$email,$birthday,$gender){
        if (!empty($firstname)) {
            if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
                return false;
            }
          }
          
          if (!empty($surname)) {
            if (!preg_match("/^[a-zA-Z ]*$/",$surname)) {
                return false;
            }
          }
            
          if (!empty($email)) {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return false;
            }
          }
        
          //check date of birth
        
          if (!empty($gender)) {
            if (!preg_match("/^[a-zA-Z ]*$/",$gender)) {
                return false;
            }
          }
    return true;
    }

    //class end
  }
?>