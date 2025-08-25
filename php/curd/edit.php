<!-- Registration 3 - Bootstrap Brain Component -->
<?php
include('header.php'); 

include('connection.php');
if(!isset($_GET['id'])){
die("Invalid ID");
}
$sqlData = "SELECT * FROM user WHERE id=".$_GET['id'];
$result = mysqli_query($connection,$sqlData);

if(mysqli_num_rows($result)> 0){
    $data = mysqli_fetch_assoc($result);
?>
<section class="p-3 p-md-4 p-xl-5">

      <div class="col-12 col-md-6 bsb-tpl-bg-lotion">
        <div class="p-3 p-md-4 p-xl-5">
          <div class="row">
            <div class="col-12">
              <div class="mb-5">
                <h2 class="h3">EDIT Registration</h2>
                <h3 class="fs-6 fw-normal text-secondary m-0">Enter your details to register</h3>
              </div>
            </div>
          </div>
          <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
            <div class="row gy-3 gy-md-4 overflow-hidden">
              <div class="col-12">
                <label for="firstName" class="form-label">First Name <span class="text-danger">*</span></label>
                <input type="text" value="<?php echo $data['name'] ?>" class="form-control" name="firstName" id="firstName" placeholder="First Name" required>
              </div>
             
              <div class="col-12">
                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                <input type="email"  value="<?php echo $data['email'] ?>" class="form-control" name="email" id="email" placeholder="name@example.com" required>
              </div>
            
              <div class="col-12">
                <div class="d-grid">
                  <button class="btn bsb-btn-xl btn-primary" type="submit">Sign up</button>
                </div>
              </div>
            </div>
          </form>
         
        
      </div>
    </div
  
<?php } else {
    echo "Invlaid Id provided";
} ?>