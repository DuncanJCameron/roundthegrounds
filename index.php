<?php
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
  echo "<p>Registration:</p>";
  echo "<ul>";
  echo "<li><a href='enter/?type=runner'>runner</a></li>";
  echo "<li><a href='enter/?type=club'>club</a></li>";
  echo "</ul>";
  echo "<p>Results:</p>";
  echo "<ul>";
  echo "<li><a href='results/?type=individual'>individual</a></li>";
  echo "<li><a href='results/?type=team'>team</a></li>";
  echo "</ul>";
  echo "</div>";
  echo "</body>";
  echo "</html>";
?>
