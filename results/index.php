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
  echo "<div class='main'>";
  if($type=='individual'){
    echo "<p>";
    echo "<table>";
    echo "<tr>";
    echo "<td class='heading'>&nbsp;&nbsp;Position&nbsp;&nbsp;</td>";
    echo "<td class='heading'>&nbsp;&nbsp;Name&nbsp;&nbsp;</td>";
    echo "<td class='heading'>&nbsp;&nbsp;Time&nbsp;&nbsp;</td>";
    echo "<td class='heading'>&nbsp;&nbsp;Number&nbsp;&nbsp;</td>";
    echo "<td class='heading'>&nbsp;&nbsp;Category&nbsp;&nbsp;</td>";
    echo "<td class='heading'>&nbsp;&nbsp;Club&nbsp;&nbsp;</td>";
    echo "</tr>";
    $query="SELECT * FROM 2019_results ORDER BY position ASC;";
    $result=$conn->query($query);
    while($row=$result->fetch_assoc()){
      echo "<tr>";
      echo "<td class='number'>".$row['position']."</td>";
      $query="SELECT * FROM 2019_runners WHERE number=".$row['number'].";";
      $numberquery=$conn->query($query);
      $number=$numberquery->fetch_assoc();
      echo "<td>".$number['name']."</td>";
      echo "<td class='number'>".$row['minutes'].":".$row['seconds']."</td>";
      echo "<td class='number'>".$row['number']."</td>";
      echo "<td class='number'>".$number['category']."</td>";
      echo "<td>".$number['club']."</td>";
      echo "</tr>";
    }
    echo "</table>";
    echo "</p>";
  }
  echo "</div>";
  echo "</body>";
  echo "</html>";
?>
