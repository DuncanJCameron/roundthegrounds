<?php
  $type=strip_tags($_GET["type"]);
  $address="localhost";
  $username="login";
  $password="N3ufNzUZW15qDDk8";
  $name="thinkly";
  $conn=new mysqli($address,$username,$password,$name);
  if($conn->connect_error) {
      die();
  }
  echo "<!DOCTYPE html>";
  echo "<html>";
  echo "<head>";
  echo "<title>Round the Grounds</title>";
  echo "<link rel='stylesheet' type='text/css' href='assets/style.css'>";
  echo "<link href='https://fonts.googleapis.com/css?family=Open+Sans&display=swap' rel='stylesheet'>";
  echo "</head>";
  echo "<body>";
  echo "<div class='header'>";
  echo "<img src='assets/banner.png'>";
  echo "</div>";
  echo "<div class='main'><p>Enter details of runner:";
  if($type=="runner"){
    echo "<form action='assets/runner.php' method='post' enctype='multipart/form-data' autocomplete='off'><p>";
    echo "<input type='text' class='field' id='name' name='name' placeholder='Name'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    echo "<input type='text' class='field' id='number' name='number' placeholder='Number'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    echo "<input type='text' class='field' id='category' name='category' placeholder='Category'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    echo "</p></form>";
  }
  echo "</div>";
  echo "</body>";
  echo "</html>";
?>
