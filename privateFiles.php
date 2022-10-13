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
    <link rel="stylesheet" href="dashboard.css" />
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
              <a href="" class="navbar-brand ">Private Mode</a>
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
                      
                      href="dashboard.php"
                      >DashBoard</a
                    >
                  </li>
               
              
                
                <li class="nav-item">
                    <a
                      class="nav-link active text-center text-md-left"
                      style="color: white; font-weight: bold"
                      aria-current="page"
                      
                      href="home.php"
                      >Logout</a
                    >
                  </li>
              
              </ul>
            </div>
          </div>
        </nav>

       <main>
        <div class="content">
            <h2 class="page-title">Your Files</h2>
        
            <table class="table">
                <thead>
                    <th>SN</th><th>Title</th><th>File Name</th><th colspan="2">Action</th>
                </thead>
                <tbody>
                    
                    <?php
                    session_start();
                    error_reporting(0);
                    require_once 'connect.php';
                    
          $result = $conn->query("select * from files where type='Private' and id=".$_SESSION['id']);
          $num_result = $result->num_rows;

          for ($i = 0; $i < $num_result; $i++) {
            $row = $result->fetch_assoc();
            
            echo "<tr><td>".($i+1)."</td><td>".$row['title']."</td><td>".$row['file_name']."</td><td><a href='../IITStudyHub/img/" . $row['file_name'] . "' download><button class='btn btn-success' style='width:90px'>Download</button></a><form action='' method='post'><button  class='btn btn-danger' style='width:90px' value='".$row['file_name']."' name='delete'>Delete</button></form></td></tr>";

          }
                    ?>
                </tbody>
            </table>
        </div>
       </main>

      
       <?php
       if(isset($_POST['delete'])){
           $delete=$_POST['delete'];
          $result = $conn->query("DELETE FROM `files` WHERE file_name='$delete' and id=".$_SESSION['id']);
       }
       ?>
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
