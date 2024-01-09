

 <?php include('includes/header.php'); ?>
  <?php include('connections.php'); ?>
  <div class="container-fluid py-4">
      <div class="row min-vh-80 h-100">
        <div class="col-12">
 
     <div class="card ">
        <div class="card-header">
         <h4> Insert data  into  Database using php 
        
          <a href="index.php" class="btn btn-danger  float-end mt-2" >back</a>
           
          </h4>
        </div>
        <div class="card-body">
   <div class="container mt-4">
    <h2 class="text-center text-success">Plant Details</h2>
    <form action="code.php" method="POST">
        <div class="form-group">
            <label for="type">Type:</label>
            <div class="input-box">
                <input type="text" class="form-control" name="type" id="type" required>
            </div>
        </div>

        <div class="form-group">
            <label for="price">Price:</label>
            <div class="input-box">
                <input type="text" class="form-control" name="price" id="price" required>
            </div>
        </div>

        <div class="form-group">
            <label for="dimension">Dimension:</label>
            <div class="input-box">
                <input type="text" class="form-control" name="dimension" id="dimension" required>
            </div>
        </div>

        <div class="form-group">
            <label for="requiredsoil">Required Soil:</label>
            <div class="input-box">
                <input type="text" class="form-control" name="requiredsoil" id="requiredsoil" required>
            </div>
        </div>

        <div class="form-group">
            <button type="submit"name='save_btn' class="btn btn-primary" >Save Data</button>
        </div>
    </form>
    
</div>
        </div>
    </div>
        
    </div>
</div>
<div>





  <?php include('includes/footer.php'); ?>