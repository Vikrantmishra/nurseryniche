

 <?php include('includes/header.php'); ?>
  <?php include('connections.php'); ?>
  <div class="container-fluid py-4">
      <div class="row min-vh-80 h-100">
        <div class="col-12">
 
     <div class="card ">
        <div class="card-header">
         <h4> Add tools  
        
          <a href="index.php" class="btn btn-danger  float-end mt-2" >back</a>
           
          </h4>
        </div>
        <div class="card-body">
   <div class="container mt-4">
    <h2 class="text-center text-success">Tools and equipments</h2>
    <form action="code.php" method="POST">
        <div class="form-group">
            <label for="type">Name:</label>
            <div class="input-box">
                <input type="text" class="form-control" name="name" id="name" required>
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
            <label for="requiredsoil">Quantity:</label>
            <div class="input-box">
                <input type="text" class="form-control" name="quantity" id="quantity" required>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" name='save_btn1' class="btn btn-primary" >Save Data</button>
        </div>
    </form>
    
</div>
        </div>
    </div>
        
    </div>
</div>
<div>





  <?php include('includes/footer.php'); ?>