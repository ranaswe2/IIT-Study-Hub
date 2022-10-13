<?php
session_start();
error_reporting(0);
if(!isset($_SESSION['id'])){
    
      header("location: home.php",  true,  302 );  exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>StudyHub</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="dashboard.css" />


  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet" />
</head>

<body>
  <div class="container">
    <header>
      <nav class="navbar navbar-expand-md">
        <div class="container-fluid">
          <!-- <a class="navbar-brand navBrand" href="#"
              ><span style="color: white">IIT </span
              ><span style="color:rgb(6, 5, 52)">Study</span
              ><span style="color: white">Hub</span></a
            > -->
          <div class="brand-container">
            <a href="" class="navbar-brand ">DashBoard</a>
          </div>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="fa fa-bars navbar-icon"></i></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">



              <!-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search Files" aria-label="Search">
                    <button class="btn btn-primary" type="submit">Search</button>
                  </form>
               -->

              <li class="nav-item">
                <a class="nav-link active text-center text-md-left" style="color: white; font-weight: bold" aria-current="page" data-bs-toggle="modal" data-bs-target="#myModal" href="#myModal">Upload</a>
              </li>

              <li class="nav-item">
                <a href="logout.php" class="nav-link active text-center text-md-left" style="color: white; font-weight: bold" aria-current="page">Logout</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>

      <!--Register modal -->
      <div class="container ">
        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Contact Us</button> -->
        <div class="modal " id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title ">Upload</h5>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal"></button> -->
              </div>
              <div class="modal-body">
                <form action="upload.php" method="POST" class="modal-form" enctype="multipart/form-data">
                  <div class="form-group mb-2">
                    <label >File title</label>
                    <input type="text" name="title" class="form-control" placeholder="File title" required>
                  </div>
                  <div class="form-group  mb-2">
                    <label >File description</label>
                    <input type="text" name="description" class="form-control" placeholder="Description">
                  </div>
                  <div class="form-group mb-2">
                    <label >File Type</label>
                    <select class="form-select" name="type" required>
                    <option value="" disabled selected>File Type</option>
                      <option value="Private">Private</option>
                      <option value="Public">Public</option>
                     
                    </select>

                  </div>
                  <div class="form-group mb-2">
                    <label >Choose File</label>
                    <input type="file" name="fname" id="pdf" required>
                  </div>


              </div>

              <div class="modal-footer">
                <button type="submit" class=" btn modal-btn ">Upload</button>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Register modal end -->
    </header>

    <section id="features" class="text-center">

      <div class="row p-3 mx-5 ">
        <div class="col-lg-6 ">
          <div class="features-col">
            <i class="fas  fa-3x fa-lock"></i>
            <h5 class="font-weight-bold">Private Files</h5>
            <p class="small">Here you can store & only you can access your private files</p>
            <form action="privateFiles.php">
              <button class="btn card-btn">Private Mode</button>
            </form>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="features-col">
            <i class="fas  fa-3x fa-lock-open"></i>
            <h5 class="font-weight-bold">Public Files</h5>
            <p class="small">Here you can store and search public files</p>
            <form action="publicFiles.php">
              <button class="btn card-btn">Public Mode</button>
            </form>
          </div>
        </div>
      </div>

      <!-- <form class="ml-5" action="home.html">
            <button class="btn logout-btn">Logout</button>
           </form> -->

    </section>


  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/9358f2475e.js" crossorigin="anonymous"></script>
</body>

</html>