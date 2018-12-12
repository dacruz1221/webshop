<?php
// Eingabe von Host, User, passwort und Datenbank
$con = mysqli_connect("localhost","Kleinbichler","whatislove21","webshop");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>