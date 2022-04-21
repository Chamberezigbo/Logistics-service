<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="res/fontawesome-free-6.0.0-web/css/all.css">
     <link rel="stylesheet" href="res/css/main.style.css">
     <link rel="stylesheet" href="res/css/global.style.css">

     <title>Global ....</title>
</head>

<body>
     <div class="container-fluid ">
          <nav class="navbar navbar-expand-lg navbar-dark fixed-top first-nav">
               <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                         <img src="res/image/logistic-logo.png" alt="" width="70" height="35">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                         <ul class="navbar-nav">
                              <li class="nav-item">
                                   <a class="nav-link active" type="button" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover">Home</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="#">Features</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="#">Pricing</a>
                              </li>
                         </ul>
                    </div>
               </div>
          </nav>

     </div>

     <div class="container mt-5 pt-5">
          <form action="register.pro.inc.php" method="post">
               <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Client Name</label>
                    <input type="text" class="form-control" name="clientName" id="exampleFormControlInput1" required>
               </div>
               <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                    <input type="text" class="form-control" id="exampleFormControlTextarea1" name="address" required></input>
               </div>
               <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Phone Number</label>
                    <input class="form-control" type="tel" id="exampleFormControlTextarea1" name="phone" required></input>
               </div>
               <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Country</label>
                    <input class="form-control" type="text" name="country" id="exampleFormControlTextarea1" required></input>
               </div>
               <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Email Address</label>
                    <input class="form-control" type="email" name="email" id="exampleFormControlTextarea1" required placeholder="name@example.com"></input>
               </div>
               <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Current Location</label>
                    <input class="form-control" type="text" name="location" id="exampleFormControlTextarea1" required></input>
               </div>
               <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Status</label>
                    <input class="form-control" type="text" name="stat" id="exampleFormControlTextarea1" required></input>
               </div>
               <div class="text-center">
                    <button class="btn btn-danger" type="submit" name="RegisterPro">Submit</button>
               </div>
          </form>
     </div>
     <!-- <?= substr(sha1(mt_rand()), 17, 10); //To Generate Random Numbers with Letters.
          ?> -->

</html>