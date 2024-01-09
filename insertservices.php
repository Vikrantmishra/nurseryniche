

 <?php include('includes/header.php'); ?>
  <?php include('connections.php'); ?>
  <div class="container-fluid py-4">
      <div class="row min-vh-80 h-100">
        <div class="col-12">
 
     <div class="card ">
        <div class="card-header">
         <h4> Add Services 
        
          <a href="index.php" class="btn btn-danger  float-end mt-2" >back</a>
           
          </h4>
        </div>
        <div class="card-body">
   <div class="container mt-4">
    <h2 class="text-center text-success">Services</h2>
    <form action="code.php" method="POST">
        <div class="form-group">
            <label for="type">Service Id</label>
            <div class="input-box">
                <input type="text" class="form-control" name="service_id" id="service_id" required>
            </div>
        </div>

        <div class="form-group">
            <label for="price">Service Name</label>
            <div class="input-box">
                <input type="text" class="form-control" name="serv_name" id="serv_name" required>
            </div>
        </div>

        <div class="form-group">
            <label for="dimension">Price:</label>
            <div class="input-box">
                <input type="text" class="form-control" name="price" id="price" required>
            </div>
        </div>

       
         <div class="form-group">
            <label for="requiredsoil">Duration:</label>
            <div class="input-box">
                <input type="text" class="form-control" name="duration" id="duration" required>
            </div>
        </div>
         <div class="form-group">
            <label for="requiredsoil">Date and Time:</label>
            <div class="input-box">
                <input type="text" class="form-control" name="date_time" id="date_time" required>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" name='save_btn2' class="btn btn-primary" >Save Data</button>
        </div>
    </form>
    
</div>
        </div>
    </div>
        
    </div>
</div>
<div>





  <?php include('includes/footer.php'); ?>