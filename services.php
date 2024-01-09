 <?php include('includes/header.php'); ?>
  <?php include('connections.php'); ?>
<div class="card mt-5 ">
        <div class="card-header">
         <h4> Services
         <a href="insertservices.php" class="btn btn-primary float-end" >Insert Data</a>
        
          </h4>
        </div>
        <div class="card-body">
          <table class="table">
  <thead>
    <tr>
      <th scope="col">Service ID</th>
      <th scope="col">Service Name</th>
      <th scope="col">Price</th>
      <th scope="col">Duration</th>
      <th scope="col">Date and Time</th>

            <th scope="col">Edit</th>
              <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
     $fetch_query= "SELECT * FROM services";
     $fetch_query_run = mysqli_query($conn,$fetch_query);
     if(mysqli_num_rows($fetch_query_run )> 0){
      foreach($fetch_query_run as $row)
      {
        ?> <tr>
    
      
      <td><?php echo $row['service_id'];?></td>
         <td><?php echo $row['serv_name'];?></td>
            <td><?php echo $row['price'];?></td>
               <td><?php echo $row['duration'];?></td>
               <td><?php echo $row['date_time'];?></td>
               <td><a href="editservices.php?service_id=<?php echo $row['service_id'];?>" class="btn btn-primary">Edit</a></td>
                <td>
                  <form action="code.php" method="post">
                    <input type="hidden" name="service_id" class="form-control" value="<?php echo $row['service_id'];?>">
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