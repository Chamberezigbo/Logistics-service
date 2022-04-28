<?php
error_reporting(0);
session_start();

if (!$_SESSION['auth']) {
     header('location:index.php');
} else {
     $currentTime = time();
     if ($currentTime > $_SESSION['expire']) {
          session_unset();
          session_destroy();
          header('location:index.php');
     } else {
          require_once "header.php";
?>

          <div class="container d-flex justify-content-center mb-5 mt-5 pt-5">
               <form class="row g-3">
                    <div class="col-md-6">
                         <label for="inputEmail4" class="form-label">Email</label>
                         <input type="email" class="form-control" disabled id="inputEmail4" placeholder="<?= $_SESSION['email']  ?>">
                    </div>
                    <div class="col-md-6">
                         <label for="inputPassword4" class="form-label">Full Name</label>
                         <input type="text" class="form-control" disabled placeholder="<?= $_SESSION['name'] ?>">
                    </div>
                    <div class="col-12">
                         <label for="inputAddress" class="form-label">Address</label>
                         <input type="text" class="form-control" disabled placeholder="<?= $_SESSION['address'] ?>">
                    </div>
                    <div class="col-12">
                         <label for="inputAddress2" class="form-label">Location</label>
                         <input type="text" class="form-control" disabled placeholder="<?= $_SESSION['location'] ?>">
                    </div>
                    <div class="col-12">
                         <label for="inputAddress2" class="form-label">Tracking number</label>
                         <input type="text" class="form-control" disabled placeholder="<?= $_SESSION['trackingId'] ?>">
                    </div>
                    <div class="col-md-6">
                         <label for="inputCity" class="form-label">Country</label>
                         <input type="text" class="form-control" disabled placeholder="<?= $_SESSION['country'] ?>">
                    </div>
                    <div class="col-md-4">
                         <label for="inputState" class="form-label">Phone Address</label>
                         <input type="text" class="form-control" disabled placeholder="<?= $_SESSION['phone'] ?>">
                    </div>
                    <div class="col-md-2">
                         <label for="inputZip" class="form-label">Status</label>
                         <input type="text" class="form-control" disabled placeholder="<?= $_SESSION['status'] ?>">
                    </div>
                    <div class="col-12 text-center">
                         <button type="submit" class="btn btn-primary">
                              <a class="text-light" href="index.php">Home</a>
                         </button>
                    </div>
               </form>

          </div>
<?php
     }
}
?>


<?php require_once 'footer.php' ?>