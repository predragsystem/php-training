<!-- Registration 3 - Bootstrap Brain Component -->
<?php 
include('header.php'); 
?>
<section class="p-3 p-md-4 p-xl-5 d-flex justify-content-center">

      <div class="col-12 col-md-6 bsb-tpl-bg-lotion ">
        <div class="p-3 p-md-4 p-xl-5 card shadow-lg bg-danger text-light ">
          <div class="row">
            <div class="col-12">
              <div class="mb-5">
                <h2 class="h3">Registration</h2>
                <h3 class="fs-6 fw-normal text-secondary m-0">Enter your details to register</h3>
              </div>
            </div>
          </div>
          <div class="card-body">
          <form action="save.php" method="post">
            <div class="row gy-3 gy-md-4 overflow-hidden">
              <div class="col-12">
                <label for="firstName" class="form-label">First Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name" required>
              </div>
             
              <div class="col-12">
                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
              </div>
            
              <div class="col-12">
                <div class="d-grid">
                  <button class="btn bsb-btn-xl btn-primary" type="submit">Sign up</button>
                </div>
              </div>
            </div>
          </form>
         </div>
        
      </div>
    </div
  
</section>