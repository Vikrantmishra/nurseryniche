

 <?php include('includes/header.php'); ?>
  <?php include('connections.php'); ?>
  <div class="container-fluid py-4">
      <div class="row min-vh-80 h-100">
        <div class="col-12">
 
      <div class="card mt-5 ">
        <div class="card-header">
         <h4> User details 
         
          </h4>
        </div>
        <div class="card-body">
          <table class="table">
  <thead>
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">last Name</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">password</th>
              <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
     $fetch_query= "SELECT * FROM userdetails";
     $fetch_query_run = mysqli_query($conn,$fetch_query);
     if(mysqli_num_rows($fetch_query_run )> 0){
      foreach($fetch_query_run as $row)
      {
        ?> <tr>
    
      
      <td><?php echo $row['first_name'];?></td>
         <td><?php echo $row['last_name'];?></td>
            <td><?php echo $row['email'];?></td>
               <td><?php echo $row['phone'];?></td>
               <td><?php echo $row['pass'];?></td>
              <td>
                  <form action="code.php" method="post">
                    <input type="hidden" name="user_details" class="form-control" value="<?php echo $row['first_name'];?>">
                    <button type="submit"  class="btn btn-primary btn-sm" name="delete_btn">delete</button>
                   
                  </form>
                </td>
    </tr>
        <?php

      }

     }
else{
  ?> 
  <tr>
  <td colspan ="7"> No record found</td>
</tr>
  <?php
 

  
}

?>

  </tbody>
</table>
        </div>
    </div>
        
        
    </div>
</div>
<div>





  <?php include('includes/footer.php'); ?>