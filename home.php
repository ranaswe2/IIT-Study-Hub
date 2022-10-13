<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>StudyHub</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
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
              <a href="" class="navbar-brand ">IIT <span style="color: rgb(17, 17, 87);">Study</span>Hub</a>
            </div>

            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span><i class="fa fa-bars navbar-icon"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a
                    class="nav-link active text-center text-md-left"
                    style="color: white; font-weight: bold"
                    aria-current="page"
                    href="#"
                    >Home</a
                  >
                </li>

                <li class="nav-item">
                  <a
                    class="nav-link active text-center text-md-left"
                    style="color: white; font-weight: bold"
                    aria-current="page"
                    data-bs-toggle="modal" data-bs-target="#myModal-login"
                    href="#myModal-login"
                    >Login</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link active text-center text-md-left"
                    style="color: white; font-weight: bold"
                    aria-current="page"
                    data-bs-toggle="modal" data-bs-target="#myModal"
                    href="#myModal"
                    >Register</a
                  >
                </li>

                <li class="nav-item">
                  <a
                    class="nav-link active text-center text-md-left"
                    style="color: white; font-weight: bold"
                    aria-current="page" 
                    data-bs-toggle="modal" data-bs-target="#myModal-about"
                    href="#myModal-about"
                    >About</a
                  >
                </li>

                <li class="nav-item">
                  <a
                    class="nav-link active text-center text-md-left"
                    style="color: white; font-weight: bold"
                    aria-current="page"
                    href="#"
                    >Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <section id="banner">
          <div class="banner-container d-flex justify-content-center align-items-center ">
            <div class="banner-contents  text-center fst-italic  mt-5">
              <h1 class="font-weight-bolder text-white mb-5">
                Share for Help and Store for
                Future
              </h1>
            </div>

           
          </div>
        </section>

        <!--Register modal -->
        <div class="container ">
          <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Contact Us</button> -->
          <div class="modal " id="myModal">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title ">Register</h5>
                          <!-- <button type="button" class="btn-close" data-bs-dismiss="modal"></button> -->
                      </div>
                      <div class="modal-body">
                          <form action="signup.php" method="POST"  class="modal-form">
                              <div class="form-group mb-2">
                                  <label class="form-label required">Name</label>
                                  <input type="text" name="name2" class="form-control" placeholder="Enter your name">
                              </div>
                              <div class="form-group  mb-2">
                                  <label class="form-label required">Email</label>
                                  <input type="email" name="email2" pattern="[a-z]*(25)[0-9]{2}@student.nstu.edu.bd" class="form-control" placeholder="example25xx@student.nstu.edu.bd">
                              </div>
                              <div class="form-group mb-2">
                                <label class="form-label required">Password</label>
                                <input type="password" name="pass2" class="form-control" placeholder="Enter password">
                            </div>
                            <div class="form-group mb-2">
                              <label class="form-label required">Repeat Password</label>
                              <input type="password" name="repass2" class="form-control" placeholder="Repeat your password">
                          </div>
                             
                          
                      </div>
                      
                      <div class="modal-footer">

                          
                            <button type="submit" class=" btn modal-btn ">Register</button>
                         
                            
                          <button type="submit" class="btn modal-btn2 " data-bs-dismiss="modal">Cancel</button>
                      </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
      <!-- Register modal end -->

      <!-- Sign in modal -->
      <div class="container ">
        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Contact Us</button> -->
        <div class="modal " id="myModal-login">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title ">Login</h5>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal"></button> -->
                    </div>
                    <div class="modal-body">
                        <form action="login.php" method="POST" class="modal-form">
                            
                            <div class="form-group  mb-2">
                                <label class="form-label required">Email</label>
                                <input type="email" name="email" pattern="[a-z]*(25)[0-9]{2}@student.nstu.edu.bd"  class="form-control" placeholder="example25xx@student.nstu.edu.bd">
                            </div>
                            <div class="form-group mb-2">
                              <label class="form-label required">Password</label>
                              <input type="password" name="password" class="form-control" placeholder="Enter password">
                          </div>
                          
                           
                    </div>
                    <div class="modal-footer">
                        <button  type="submit" class=" btn modal-btn ">Login</button>
                    </div>
                  
                       </form>
                </div>
            </div>
        </div>
    </div>
      <!-- end Sign in modal -->
      <!-- About modal -->

      <div class="container ">
        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Contact Us</button> -->
        <div class="modal " id="myModal-about">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title ">About</h5>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal"></button> -->
                    </div>
                    <div class="modal-body">
                        <form class="modal-form">
                            
                            <p style="font-family: sans-serif;">IIT StudyHub is for//////////////////////////////////////////////////////////////////////////////////////////////////////// the students of IIT, NSTU. Here any one can keep his/her file private
                              and also can share the non-private file. There is a search option where a register member can search file, question, assignment, and so on.

                            </p>
                           
                        </form>
                    </div>
                    <div class="modal-footer">
                        
                        <button type="submit" class="btn modal-btn2 " data-bs-dismiss="modal">Back</button>
                    </div>
                    
         
            </div>
        </div>
    </div>
      <!-- end Sign in modal -->
      <!-- end About modal -->
      </header>

      <main></main>

      <!-- footer start -->
      <footer class="text-center text-white" style="background-color: #f1f1f1;">
        <!-- Grid container -->
        <div class="container pt-4">
          <!-- Section: Social media -->
          <section class="mb-4">
            <!-- Facebook -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-facebook-f"></i
            ></a>
      
            <!-- Twitter -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-twitter"></i
            ></a>
      
            <!-- Google -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-google"></i
            ></a>
      
            <!-- Instagram -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-instagram"></i
            ></a>
      
            <!-- Linkedin -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-linkedin"></i
            ></a>
            <!-- Github -->
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-github"></i
            ></a>
          </section>
          <!-- Section: Social media -->
        </div>
        <!-- Grid container -->
      
        <!-- Copyright -->
        <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © Copyright: IIT Study Hub Development Team
         
        </div>
        <!-- Copyright -->
      </footer>
    
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://kit.fontawesome.com/9358f2475e.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
