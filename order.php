 <?php include('includes/header.php'); ?>
  <?php include('connections.php'); ?>
<div class="card mt-5 ">
        <div class="card-header">
         <h4> Order Details
        
        
          </h4>
        </div>
        <div class="card-body">
          <table class="table">
  <thead>
    <tr>
      <th scope="col">user Id</th>
      <th scope="col">Order Id</th>
      <th scope="col">Product and services</th>
      <th scope="col">Contact</th>
       <th scope="col">location</th>
        <th scope="col">Date and  time</th>


              <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
     $fetch_query= "SELECT * FROM order_details";
     $fetch_query_run = mysqli_query($conn,$fetch_query);
     if(mysqli_num_rows($fetch_query_run )> 0){
      foreach($fetch_query_run as $row)
      {
        ?> <tr>
    
      
      <td><?php echo $row['user_id'];?></td>
         <td><?php echo $row['order_no'];?></td>
            <td><?php echo $row['product'];?></td>
               <td><?php echo $row['contact'];?></td>
                <td><?php echo $row['location'];?></td>
                 <td><?php echo $row['date_time'];?></td>

               <td>
                  <form action="code.php" method="post">
                    <input type="hidden" name="tool_type" class="form-control" value="<?php echo $row['order_no'];?>">
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
  <td colspan ="5"> No record found</td>
</tr>
  <?php
 

  
}

?>

  </tbody>
</table>
        </div>
    </div>
      <?php include('includes/footer.php'); ?>