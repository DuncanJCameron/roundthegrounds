<?php
  $address="localhost";
  $username="login";
  $password="N3ufNzUZW15qDDk8";
  $name="roundthegrounds";
  $conn=new mysqli($address,$username,$password,$name);
  if($conn->connect_error) {
      die();
  }
  $name=$_POST['name'];
  $number=$_POST['number'];
  $category=$_POST['category'];
  if($_POST['club']=="Club"){
    $club="";
  }
  else{
    $club=$_POST['club'];
  }
  $query="SELECT * FROM 2019_runners WHERE number='$number'";
  $result=$conn->query($query);
  if($result->num_rows==0) {
    $query="INSERT INTO 2019_runners (name,number,category,club) VALUES ('$name','$number','$category','$club')";
    $conn->query($query);
    header("Location: /roundthegrounds/enter/?type=runner");
    die();
  }
  else{
    echo "number already in use";
  }
?>
