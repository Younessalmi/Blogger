<!DOCTYPE html>
<!-- saved from url=(0053)https://getbootstrap.com/docs/5.0/examples/dashboard/ -->
<?php
include './api/sql.php';

$ID = $_GET["id"];

$SelectAll = $conn->query("SELECT * FROM authors WHERE id=$ID");
$authorsSELECTED = $SelectAll->fetchAll(PDO::FETCH_OBJ);


?>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.79.0">
  <title>Dashboard Template · Bootstrap v5.0</title>
  <!-- Bootstrap core CSS -->
  <link href="./css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <!-- Favicons -->
  <link rel="icon" href="favicon.ico">
  
  <meta name="theme-color" content="#7952b3">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="./css/dashboard.css" rel="stylesheet">
  <style type="text/css">
    /* Chart.js */
    @keyframes chartjs-render-animation {
      from {
        opacity: .99
      }

      to {
        opacity: 1
      }
    }

    .chartjs-render-monitor {
      animation: chartjs-render-animation 1ms
    }

    .chartjs-size-monitor,
    .chartjs-size-monitor-expand,
    .chartjs-size-monitor-shrink {
      position: absolute;
      direction: ltr;
      left: 0;
      top: 0;
      right: 0;
      bottom: 0;
      overflow: hidden;
      pointer-events: none;
      visibility: hidden;
      z-index: -1
    }

    .chartjs-size-monitor-expand>div {
      position: absolute;
      width: 1000000px;
      height: 1000000px;
      left: 0;
      top: 0
    }

    .chartjs-size-monitor-shrink>div {
      position: absolute;
      width: 200%;
      height: 200%;
      left: 0;
      top: 0
    }
  </style>
</head>

<body cz-shortcut-listen="true">

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="https://getbootstrap.com/docs/5.0/examples/dashboard/#">Abstract Dashbord</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="#">Sign out</a>
      </li>
    </ul>
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="./index.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                  <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                  <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                Dashboard
              </a>
            </li>


            <li class="nav-item">
              <a class="nav-link active" href="./Authors.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                  <circle cx="9" cy="7" r="4"></circle>
                  <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                  <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
                Authors
              </a>
            </li>


          </ul>


        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="chartjs-size-monitor">
          <div class="chartjs-size-monitor-expand">
            <div class=""></div>
          </div>
          <div class="chartjs-size-monitor-shrink">
            <div class=""></div>
          </div>
        </div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Edite Authors</h1>
        </div>

        <div class="table-responsive">
            <form method="POST" action="#" enctype="multipart/form-data">

                <div class="form-row align-items-center">

                      <div class="col-auto">
                        <label class="sr-only" for="inlineFormInputGroup">Author Full Name</label>
                        <div class="input-group mb-2">
                          <input type="name" name="fullname" value="<?=$authorsSELECTED[0]->nom?>" class="form-control" id="inlineFormInputGroup" placeholder="Full name">
                        </div>
                      </div>

                      <div class="col-auto">
                        <label class="sr-only" for="inlineFormInputGroup">Author Email</label>
                        <div class="input-group mb-2">
                          <input type="Email" name="Email" value="<?=$authorsSELECTED[0]->email?>" class="form-control" id="inlineFormInputGroup" placeholder="Email Adresse">
                        </div>
                      </div>

                      <div class="col-auto">
                        <label class="sr-only" for="inlineFormInputGroup">Author Profile Picture</label>
                        <div class="input-group mb-2">
                        <img width="50px;" src="<?= $authorsSELECTED[0]->img ?>" alt="" >
                          <input type="file" name="picture"  class="form-control" id="inlineFormInputGroup" placeholder="Author Profile Picture">
                        </div>
                      </div>

                      <div class="col-auto">
                        <button type="submit" name="submit" class="btn btn-primary mb-2">Submit</button>
                      </div>

                </div>

            </form>
        </div>

      </main>
    </div>
  </div>


  <script src="./js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  <script src="./js/feather.min.js." integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <script src="./js/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
  <script src="./js/dashboard.js"></script>

  </form>


<?php
if(isset($_POST['submit']))
{ 
  $filepath = "../images/" . $_FILES["picture"]["name"];
  move_uploaded_file($_FILES["picture"]["tmp_name"], $filepath);
  $servername = "localhost";
  $username = "root";
  $password = "";
  
  try {
    $conn = new PDO("mysql:host=$servername;dbname=hello", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  } 
  
  $Fname = $_POST["fullname"];
  $Email =  $_POST["Email"];


  $sql = "UPDATE authors (nom,email,img) SET ('nom=$Fname','email=$Email','img=$filepath' WHERE id='$ID')";
  
    
  $conn->exec($sql);
  }
?>

</body>

</html>