<?php
  $type=strip_tags($_GET["type"]);
  $address="localhost";
  $username="login";
  $password="N3ufNzUZW15qDDk8";
  $name="roundthegrounds";
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
  echo "<div class='main'><p>Enter details of $type:";
  if($type=="runner"){
    echo "<form action='assets/runner.php' method='post' enctype='multipart/form-data' autocomplete='off'><p>";
    echo "<input type='text' class='field' id='name' name='name' placeholder='Name'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    echo "<input type='text' class='number' id='number' name='number' placeholder='Number'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    echo "<input type='text' class='field' id='category' name='category' placeholder='Category'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    echo "<select id='club' name='club'>";
    echo "<option value=''>Club</option>";
    $query="SELECT name FROM clubs;";
    $result=$conn->query($query);
    while($row=$result->fetch_assoc()){
      echo "<option value='".$row['name']."'>".$row['name']."</option>";
    }
    echo "</select>";
    echo "<br><br><input type='submit' id='submit' value='Enter'>";
    echo "</p></form>";
  }
  else if($type=="club"){
    echo "<form action='assets/club.php' method='post' enctype='multipart/form-data' autocomplete='off'><p>";
    echo "<input type='text' class='field' id='name' name='name' placeholder='Name'>";
    echo "<br><br><input type='submit' id='submit' value='Enter'>";
    echo "</p></form>";
  }
  else if($type=="results"){
    echo "<form action='assets/result.php' method='post' enctype='multipart/form-data' autocomplete='off'><p>";
    echo "<input type='text' class='number' id='position' name='position' placeholder='Position'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    echo "<input type='text' class='number' id='number' name='number' placeholder='Number'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    echo "<input type='text' class='number' id='minutes' name='minutes' placeholder='Minutes'>&nbsp;:&nbsp;";
    echo "<input type='text' class='number' id='seconds' name='seconds' placeholder='Seconds'>";
    echo "<br><br><input type='submit' id='submit' value='Enter'>";
    echo "</p></form>";
  }
  echo "</div>";
  echo "</body>";
  echo "</html>";
?>
