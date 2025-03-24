<?php
$email = $_POST["email"];
$senha = $_POST["senha"];


if($email == "pietro@gmail.com" && $senha == "123"){
    header("location: index.html");
   // exit();
}
else{
    header("location: login.html");
  //  exit();
}

?>