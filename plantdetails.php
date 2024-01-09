 <?php include('includes/header.php'); ?>
  <?php include('connections.php'); ?>
<div class="card mt-5 ">
        <div class="card-header">
         <h4> Plant Details
         <a href="insert.php" class="btn btn-primary float-end" >Insert Data</a>
        
          </h4>
        </div>
        <div class="card-body">
          <table class="table">
  <thead>
    <tr>
      <th scope="col">type</th>
      <th scope="col">price</th>
      <th scope="col">dimension</th>
      <th scope="col">requiredsoil</th>
            <th scope="col">Edit</th>
              <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
     $fetch_query= "SELECT * FROM plant";
     $fetch_query_run = mysqli_query($conn,$fetch_query);
     if(mysqli_num_rows($fetch_query_run )> 0){
      foreach($fetch_query_run as $row)
      {
        ?> <tr>
    
      
      <td><?php echo $row['type'];?></td>
         <td><?php echo $row['price'];?></td>
            <td><?php echo $row['dimension'];?></td>
               <td><?php echo $row['requiredsoil'];?></td>
               <td><a href="edit.php?type=<?php echo $row['type'];?>" class="btn btn-primary">Edit</a></td>
                <td>
                  <form action="code.php" method="post">
                    <input type="hidden" name="plant_type" class="form-control" value="<?php echo $row['type'];?>">
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
  <td colspan ="5"> No record fond</td>
</tr>
  <?php
 

  
}

?>

  </tbody>
</table>
        </div>
    </div>
      <?php include('includes/footer.php'); ?>