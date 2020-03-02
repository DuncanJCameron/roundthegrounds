<?php
  $address="localhost";
  $username="login";
  $password="N3ufNzUZW15qDDk8";
  $name="roundthegrounds";
  $conn=new mysqli($address,$username,$password,$name);
  if($conn->connect_error) {
      die();
  }
  $club=$_POST['name'];
  $query="SELECT * FROM clubs WHERE name='$club'";
  $result=$conn->query($query);
  if($result->num_rows==0) {
    $query="INSERT INTO clubs (name) VALUES ('$club')";
    $conn->query($query);
    header("Location: /roundthegrounds/enter/?type=club");
    die();
  }
  else{
    echo "club already exists";
  }
?>
