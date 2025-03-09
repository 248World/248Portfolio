<?php


  if ($_SERVER ["REQUEST_METHOD"] == "POST"){
     $name = htmlspecialchars($_POST["name"]);
     $email = htmlspecialchars($_POST["email"]);
     $msg = htmlspecialchars($_POST["msg"]);
     

     echo "Thanks for sending us a message.";
     echo "<br>";
     echo $name;
     echo "<br>";
     echo $email;
     echo "<br>";
     echo "<msg>";
  }
