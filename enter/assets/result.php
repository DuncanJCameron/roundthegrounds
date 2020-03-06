<?php
  $address="localhost";
  $username="login";
  $password="N3ufNzUZW15qDDk8";
  $name="roundthegrounds";
  $conn=new mysqli($address,$username,$password,$name);
  if($conn->connect_error) {
      die();
  }
  $position=$_POST['position'];
  $number=$_POST['number'];
  $minutes=$_POST['minutes'];
  $seconds=$_POST['seconds'];
  $query="SELECT * FROM 2020_results WHERE number='$number' OR position='$position'";
  $result=$conn->query($query);
  if($result->num_rows==0) {
    $query="INSERT INTO 2020_results (position,number,minutes,seconds) VALUES ('$position','$number','$minutes','$seconds')";
    $conn->query($query);
    header("Location: /roundthegrounds/enter/?type=results");
    die();
  }
  else{
    echo "number or position already entered";
  }
?>
