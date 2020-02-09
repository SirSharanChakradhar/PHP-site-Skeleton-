<?php
// Here we check whether the user got to this page by clicking the proper signup button.
if (isset($_POST['submit'])) {

  // We include the connection script so we can use it later.
  // We don't have to close the MySQLi connection since it is done automatically, but it is a good habit to do so anyways since this will immediately return resources to PHP and MySQL, which can improve performance.
  require 'dbh.inc.php';

  // We grab all the data which we passed from the signup form so we can use it later.
//   $username = $_POST['uid'];
//   $email = $_POST['mail'];
//   $password = $_POST['pwd'];
//   $passwordRepeat = $_POST['pwd-repeat'];

$title = isset($conn,$_POST['title']);  
$givenname = isset($conn,$_POST['givenname']);  
$surname = isset($conn,$_POST['surname']);  
$dob = isset($conn,$_POST['dob']);  
$emailid = isset($conn,$_POST['emailid']);  
$streetaddress = isset($conn,$_POST['streetaddress']);  
$city = isset($conn,$_POST['city']);  
$state = isset($conn,$_POST['state']);  
$country = isset($conn,$_POST['country']);  
$mobile = isset($conn,$_POST['mobile']);  
$landline = isset($conn,$_POST['landline']);  
$businessname = isset($conn,$_POST['businessname']);  
$website1 = isset($conn,$_POST['website1']);  
$website2 = isset($conn,$_POST['website2']);  
$notes = isset($conn,$_POST['notes']);  
$users_id = isset($conn,$_POST['users_id']);  
$create_time = isset($conn,$_POST['create_time']);  
$last_updated = isset($conn,$_POST['last_updated']); 

$users_id = isset($_SESSION['id']);


//Here we create a SQL statement that insert data into our database


$query ="INSERT INTO seller_details
(title, givenname, dob, surname, emailid, streetaddress, city, state, country, mobile, landline, businessname, website1, website2, notes, users_id)
VALUES($title, $givenname, $dob,$surname ,$emailid ,$streetaddress ,$city ,$state ,$country , $mobile, $landline,$businessname ,$website1 ,$website2 ,$notes , $users_id )";

$result = mysqli_query($query); 
//Here we "query" the data in the database
mysqli_query($conn, $query);

//We don't need to do anythin else in order to insert data
//HOWEVER!!!
//We have not added ANY security to our code by filtering the data the user typed into the HTML form. We will learn about security later using prepared statements!

//Here we go back to the front page
header("Location: ../seller.php?submit=success");

// echo $title ; 
// echo $givenname; 
// echo $surname;  
// echo $dob;  
// echo $emailid;
// echo $streetaddress; 
// echo $city; 
// echo $state;  
// echo $country ; 
// echo $mobile ;
// echo $landline; 
// echo $businessname; 
// echo $website1;
// echo $website2 ; 
// echo $notes ;
// echo $users_id ; 
// echo $create_time; 
// echo $last_updated; 

echo $result;
}