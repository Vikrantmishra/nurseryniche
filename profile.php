
<?php
include('includes/header.php');
include('connections.php');
?>

<span class="mask  bg-gradient-primary  opacity-6"></span>
<div class="card card-body mx-3 mx-md-4 mt-n6">
<div class="row gx-4 mb-2">
<div class="col-auto">
<div class="avatar avatar-xl position-relative">
<img src="./assets/photos/logo.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
</div>
</div>
<div class="col-auto my-auto">
<div class="h-100">
<h5 class="mb-1">
Nursery Niche
</h5>
<p class="mb-0 font-weight-normal text-sm">
CEO / Co-Founder
</p>
</div>

</div>
<div class="col-lg-4 col-md-12 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
<div class="nav-wrapper position-relative end-0">
<ul class="nav nav-pills nav-fill p-1" role="tablist">
<li class="nav-item" role="presentation">
<a class="nav-link mb-0 px-0 py-1 active " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
<i class="material-icons text-lg position-relative">home</i>
<span class="ms-0">App</span>
</a>
</li>
<li class="nav-item" role="presentation">
<a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false" tabindex="-1">
<i class="material-icons text-lg position-relative">email</i>
<span class="ms-1">Messages</span>
</a>
</li>
<li class="nav-item" role="presentation">
<a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false" tabindex="-1">
<i class="material-icons text-lg position-relative">settings</i>
<span class="ms-1">Settings</span>
</a>
</li>
<div class="moving-tab position-absolute nav-link" style="padding: 0px; width: 65px; transform: translate3d(0px, 0px, 0px); transition: all 0.5s ease 0s;" aria-selected="false" tabindex="-1" role="tab"><a class="nav-link mb-0 px-0 py-1 active " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">-</a></div></ul>
</div>
</div>
</div>
</div>
</div>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header bg-success text-white">
          <h4>Admin Profile</h4>
        </div>
        <div class="card-body">
          <form>
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
              <label for="phone">Phone Number:</label>
              <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
            </div>
            <div class="form-group">
              <label for="additionalInfo">Additional Information:</label>
              <textarea class="form-control" id="additionalInfo" rows="3" placeholder="Enter additional information"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Profile</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>