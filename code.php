



<?php 
  include('connections.php');?>
<?php
if(isset($_POST['save_btn'])){
if ($_SERVER['REQUEST_METHOD']=='POST'){
  $type=$_POST['type'];
  $price=$_POST['price'];
  $dimension=$_POST['dimension'];
  $requiredsoil=$_POST['requiredsoil'];
  $sql="INSERT INTO `plantdetails`.`plant`(`type`, `price`, `dimension`, `requiredsoil`, `datetime`) VALUES ('$type','$price','$dimension','$requiredsoil',current_timestamp());";
  $data = mysqli_query($conn,$sql);

}
if ($sql){
    $_SESSION['status']="DATA INSERTED SUCCESSFULLY";
     $_SESSION['status_code']="success";
    header('location: index.php');
}

else{
    $_SESSION['status']="DATA NOT INSTERTED SUCCESSFULLY";
     $_SESSION['status_code']=" error";
    header('location: insert.php');
}
}
if(isset($_POST['update_btn'])){
   $type=$_POST['type'];
  $price=$_POST['price'];
  $dimension=$_POST['dimension'];
  $requiredsoil=$_POST['requiredsoil'];
  $update_query= "UPDATE plant SET type = '$type ', price='$price', dimension='$dimension', requiredsoil='$requiredsoil' WHERE type ='$type'";
  $update_query_run= mysqli_query($conn,$update_query);
  if($update_query_run){

 $_SESSION['status']="DATA UPDATED SUCCESSFULLY";
     $_SESSION['status_code']="success";
    header('location: index.php');
  }
  else{
    $_SESSION['status']="UPDATION FAILED";
     $_SESSION['status_code']=" error";
    header('location: insert.php');
}
}
if(isset($_POST['delete_btn'])){
  $type=$_POST['plant_type'];
  $delete_query= "DELETE FROM  plant WHERE type='$type'";
  $delete_query_run= mysqli_query($conn,$delete_query);
  if($delete_query_run){
     $_SESSION['status']="DATA DELETED SUCCESSFULLY";
     $_SESSION['status_code']="success";
    header('location: index.php');
  }
   else{
    $_SESSION['status']="DELETION FAILED";
     $_SESSION['status_code']=" error";
    header('location: index.php');
}
  
  
}
?>

//Userdetails_Query


<?php 
  include('connections.php');?>
<?php
if(isset($_POST['save_btn'])){
if ($_SERVER['REQUEST_METHOD']=='POST'){
  $first_name=$_POST['first_name'];
  $last_name=$_POST['last_name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
   $pass=$_POST['pass'];

  $sql="INSERT INTO `userdetails`.`plant`(`first_name`, `last_name`, `email`, `phone`,`pass`, `datetime`) VALUES ('$first_name','$last_name','$email','$phone','$pass',current_timestamp());";
  $data = mysqli_query($conn,$sql);

}
if ($sql){
    $_SESSION['status']="DATA INSERTED SUCCESSFULLY";
     $_SESSION['status_code']="success";
    header('location: index.php');
}

else{
    $_SESSION['status']="DATA NOT INSTERTED SUCCESSFULLY";
     $_SESSION['status_code']=" error";
    header('location: insert.php');
}
}

if(isset($_POST['delete_btn'])){
  $first_name=$_POST['user_details'];
  $delete_query= "DELETE FROM  userdetails WHERE first_name='$first_name'";
  $delete_query_run= mysqli_query($conn,$delete_query);
  if($delete_query_run){
     $_SESSION['status']="DATA DELETED SUCCESSFULLY";
     $_SESSION['status_code']="success";
    header('location: index.php');
  }
   else{
    $_SESSION['status']="DELETION FAILED";
     $_SESSION['status_code']=" error";
    header('location: index.php');
}
  
  
}
 ?>

//tools



<?php 

  include('connections.php');?>
<?php
if(isset($_POST['save_btn1'])){
if ($_SERVER['REQUEST_METHOD']=='POST'){
  $name=$_POST['name'];
  $price=$_POST['price'];
  $dimension=$_POST['dimension'];
  $quantity=$_POST['quantity'];
  $sql="INSERT INTO `tools`(`name`, `price`, `dimension`, `quantity`, `datetime`) VALUES ('$name','$price','$dimension','$quantity',current_timestamp());";
  $data = mysqli_query($conn,$sql);

}
if ($sql){
    $_SESSION['status']="DATA INSERTED SUCCESSFULLY";
     $_SESSION['status_code']="success";
    header('location: index.php');
}

else{
    $_SESSION['status']="DATA NOT INSTERTED SUCCESSFULLY";
     $_SESSION['status_code']=" error";
    header('location: insertools.php');
}
}
if(isset($_POST['update_btn1'])){
   $name=$_POST['name'];
  $price=$_POST['price'];
  $dimension=$_POST['dimension'];
  $quantity=$_POST['quantity'];
  $update_query= "UPDATE tools SET name = '$name ', price='$price', dimension='$dimension', quantity='$quantity' WHERE  name='$name'";
  $update_query_run= mysqli_query($conn,$update_query);
  if($update_query_run){

 $_SESSION['status']="DATA UPDATED SUCCESSFULLY";
     $_SESSION['status_code']="success";
    header('location: index.php');
  }
  else{
    $_SESSION['status']="UPDATION FAILED";
     $_SESSION['status_code']=" error";
    header('location: insert.php');
}
}
if(isset($_POST['delete_btn'])){
  $name=$_POST['tool_type'];
  $delete_query= "DELETE FROM  tools WHERE name='$name'";
  $delete_query_run= mysqli_query($conn,$delete_query);
  if($delete_query_run){
     $_SESSION['status']="DATA DELETED SUCCESSFULLY";
     $_SESSION['status_code']="success";
    header('location: index.php');
  }
   else{
    $_SESSION['status']="DELETION FAILED";
     $_SESSION['status_code']=" error";
    header('location: index.php');
}
  
  
}
?>




<?php 

  include('connections.php');?>
<?php

if(isset($_POST['delete_btn'])){
  $order_no=$_POST['order_no'];
  $delete_query= "DELETE FROM  order_details WHERE order_no='$order_no'";
  $delete_query_run= mysqli_query($conn,$delete_query);
  if($delete_query_run){
     $_SESSION['status']="DATA DELETED SUCCESSFULLY";
     $_SESSION['status_code']="success";
    header('location: index.php');
  }
   else{
    $_SESSION['status']="DELETION FAILED";
     $_SESSION['status_code']=" error";
    header('location: index.php');
}
  
  
}
?>

//servicesquery


<?php 
  include('connections.php');?>
<?php
if(isset($_POST['save_btn2'])){
if ($_SERVER['REQUEST_METHOD']=='POST'){
  $service_id=$_POST['service_id'];
  $serv_name=$_POST['serv_name'];
  $price=$_POST['price'];
  $duration=$_POST['duration'];
  $date_time=$_POST['date_time'];
  $sql="INSERT INTO `services`(`service_id`, `serv_name`, `price`,`duration`, `date_time`) VALUES ('$service_id','$serv_name','$price','$duration',current_timestamp());";
  $data = mysqli_query($conn,$sql);

}
if ($sql){
    $_SESSION['status']="DATA INSERTED SUCCESSFULLY";
     $_SESSION['status_code']="success";
    header('location: index.php');
}

else{
    $_SESSION['status']="DATA NOT INSTERTED SUCCESSFULLY";
     $_SESSION['status_code']=" error";
    header('location: insert.php');
}
}
if(isset($_POST['update_btn'])){
  $service_id=$_POST['service_id'];
  $serv_name=$_POST['serv_name'];
  $price=$_POST['price'];
  $duration=$_POST['duration'];
  $update_query= "UPDATE services SET service_id = '$service_id ',serv_name='$serv_name', price='$price', duration='$duration' WHERE service_id ='$service_id'";
  $update_query_run= mysqli_query($conn,$update_query);
  if($update_query_run){

 $_SESSION['status']="DATA UPDATED SUCCESSFULLY";
     $_SESSION['status_code']="success";
    header('location: index.php');
  }
  else{
    $_SESSION['status']="UPDATION FAILED";
     $_SESSION['status_code']=" error";
    header('location: insert.php');
}
}
if(isset($_POST['delete_btn'])){
  $service_id=$_POST['service_id'];
  $delete_query= "DELETE FROM  services WHERE service_id='$service_id'";
  $delete_query_run= mysqli_query($conn,$delete_query);
  if($delete_query_run){
     $_SESSION['status']="DATA DELETED SUCCESSFULLY";
     $_SESSION['status_code']="success";
    header('location: index.php');
  }
   else{
    $_SESSION['status']="DELETION FAILED";
     $_SESSION['status_code']=" error";
    header('location: index.php');
}
  
  
}
?>
