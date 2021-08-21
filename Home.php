<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
    integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <title>NiX</title>
</head>

<body>
  <!--Nave bar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="Home.php">Nix_Tech</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="resume.html">Resume</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Projects
            </a>
            <ul class="dropdown-menu active " aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="projects.html">Major Project</a></li>
              <li><a class="dropdown-item" href="projects.html">Minor project </a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">My own projects</a></li>
              <li><a class="dropdown-item" href="projects.html"> Project 1</a></li>
              <li><a class="dropdown-item" href="projects.html"> project 2</a></li>
            </ul>
          </li>
          <li class="nav-item">
          <a class="nav-link active" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="Future.html" tabindex="-1" aria-disabled="true">Future Goal</a>
          </li>
        </ul>
        <form class="d-flex" action="https://www.google.com/" target="blanck" method="GET">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
         
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>


  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/p1.jpg " width="1200" height="600" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/p2.jpg " width="1200" height="600" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/p3.jpg" width="1200" height="600" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- socail icons-->




  <!-- MY SELF-->

  <section class="my-3">
    <div class="py-3">
      <h2 class="text-center">MySelf</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="img/ak.jpg " width="300" height="300" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h2 class="display-4"> I am amit mishra .</h2>
          <p class="py-3">First of all i would like to thank you for visit my website
            My self Amit Kumar Mishra, I belong from Uttar pradesh varanasi but i
            lived in Kolkata with my family ,I am pursuing my under Graduation of Bachelor of
            Computer Application from Geroge Group Of Colleges.
          </p>
          <a href="myself.html"class="btn btn-primary">Read more!</a>
        </div>
      </div>
    </div>
  </section>

  <!--language gallery -->
  <section>
    <div class="py-5">
      <h2 class="text-center">Technical_Skills</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-13">
          <div class="card" style="width: 18rem;">
            <img src="img/c.jpg" width="100" height="200" class="card-img-top" alt="">
            <div class="card-body">
              <h2>
                <p class="card-text">(C Programming)</p>
              </h2>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-lg-4 col-12">
          <div class="card" style="width: 18rem;">
            <img src="img/cpp.jpg" width="100" height="200" class="card-img-top" alt="...">
            <div class="card-body">
              <h2>
                <p class="card-text">**(C PlusPlus-Programming)**</p>
              </h2>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-lg-4 col-12">
          <div class="card" style="width: 18rem;">
            <img src="img/java.jpg" width="100" height="200" class="card-img-top" alt="...">
            <div class="card-body">
              <h2>
                <p class="card-text">(Java Programming )</p>
              </h2>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Web technology -->
  <section>
    <div class="py-5">
      <h2 class="text-center">Web-Technology </h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card" style="width: 18rem;">
            <img src="img/html.jpg" width="100" height="200" class="card-img-top" alt="">
            <div class="card-body">
              <h2>
                <p class="card-text">(HTML)</p>
              </h2>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-lg-4 col-12">
          <div class="card" style="width: 18rem;">
            <img src="img/css.jpg" width="100" height="200" class="card-img-top" alt="...">
            <div class="card-body">
              <h2>
                <p class="card-text">(CSS)</p>
              </h2>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-lg-4 col-12">
          <div class="card" style="width: 18rem;">
            <img src="img/jav.jpg" width="100" height="200" class="card-img-top" alt="...">
            <div class="card-body">
              <h2>
                <p class="card-text">(JavaScript)</p>
              </h2>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>



  <!-- Concept-->
  <section>
    <div class="py-5">
      <h2 class="text-center">Concepts</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-11">
          <div class="card">
            <img class="card-img-top" src="img/oop.jpg" width="200" height="300" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">(OOP)</h4>
              <p class="card-text">Object Oriented Programming.</p>
              <a href="img/OOP.pdf" class="btn btn-primary">Notes</a>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="img/dbms.jpg" width="200" height="300" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">(DBMS)</h4>
              <p class="card-text">DataBase Management System .</p>
              <a href="img/DBMS_Notes.pdf" class="btn btn-primary">Notes</a>
            </div>
          </div>
        </div>



        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="img/cn.jpg" width="200" height="300" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">(Networking)</h4>
              <p class="card-text">Cmoputer Network.</p>
              <a href="img/computer net.pdf" class="btn btn-primary">Notes</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="img/os.jpg" width="200" height="300" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">(OS)</h4>
              <p class="card-text">Operating System.</p>
              <a href="img/os.pdf" class="btn btn-primary">Notes</a>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="img/ds.jpg" width="200" height="300" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">(DSA)</h4>
              <p class="card-text">Data Structure</p>
              <a href="https://www.interviewbit.com/data-structure-interview-questions/"
                class="btn btn-primary">Notes</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

<hr size="8"> 
<hr size="4"> 


  <!-- FOTTER-->
  <footer>
    <div class="container">
      <div class=" sec aboutus">
        <h2>Purpose</h2>
        <p>To Represent myself differently throug this website whatever i learned
          in Web-Technology i will emplement that in this site or in my projects..</p>
          
        <ul class="sci">
          <li><a href="https://www.facebook.com/profile.php?id=100010439765590"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
          <li><a href="https://twitter.com/amit_10111"><i class="fab fa-twitter" aria-hidden="true"></i></i></a></li>
          <li><a href="www.linkedin.com/in/amit-mishra-4579b91b5"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fab fa-telegram" aria-hidden="true"></i></a></li>
        </ul>
        
      </div>
      <div class="Quicklinks">
        <h2>QuickLinks<h2>
            <ul>
              <li><a href="https://gbmemorialinstitution.org/">School</a></li>
              <li><a href="https://www.georgecollege.org/george-college-of-management-and-science">Collage</a></li>
              <li><a href="myself.html">About</a></li>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">Privacy policy</a></li>
              <li><a href="#">Help</a></li>
              <li><a href="#">Terms & consitions</a></li>
            </ul>
      </div>
      <div class="sec contact">
        <h2>Contact Info</h2>
        <ul class="info">
          <li><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
            <span>Shibrampur Plaza housing Ashute-2
              <br>Kolakata 700141 Maheastala</span>
          </li>
          <li>
            <span><i class="fa fa-phone-square" aria-hidden="true"></i></span>
            <p><a href="tel:9123086934"> +91 9123086934</a></p>

          </li>

          <li>
            <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
            <p><a href="amitmihsira10111@gmail.com">amitmihsira10111@gmail.com</a></p>
          </li>
        </ul>
      </div>
    </div>
  </footer>
  <div class="powerdby">
    <p>
      Powerd by Nix @2021
    </p>

  </div>
  <!-- FOTTER-->


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
</body>

</html>

<!--<h3>Purpose</h3>
          <div class="content">
<p>To Represent my self differently <br>or uniuely from others in front of<br> interviewer
              or any organization.<br> whatever i learned in Web-Technology <br> i will emplement that in this website.
            </p>     </i>-->