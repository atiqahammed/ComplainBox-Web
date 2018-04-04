<?php  

session_start();
  echo "loged in";

  if(isset($_SESSION["email"])) {
    echo "session setted";
  }
  else {
    echo "session is not setted";
  }






?>