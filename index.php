<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <!-- Bootstarp Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
  <!-- cion font awesome-->
  <link rel="stylesheet" types="text/css" href="fontawesome/css/all.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- My CSS -->
  <link rel="stylesheet" href="style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

  <title>My Portfolio | Fika Febrika</title>
</head>

<body id="home">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
    <div class="container">
      <div class="navbar-brand" href="#">
        <img src="img/fika logo.png" width="75" />
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#skills">Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#tools">Tools</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#experience">Experience</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#education">Education</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#projects">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Jumbotron -->
  <?php
    require_once "koneksi.php";
    $sql = mysqli_query($koneksi, "SELECT * FROM biodata");
    while($r=mysqli_fetch_array($sql)) {
  ?>
  <section class="jumbotron text-center">
    <img src="<?php echo $r['foto']?>" alt="Fika Febrika" width="200" class="rounded-circle img-thumbnail" />
    <h1 class="display-4">Fika Febrika</h1>
    <p class="lead">Student | System Analyst</p>
  </section>
  <!-- Akhir Jumbotron -->


  <!-- About -->
  <section class="about" id="about">
    <div class="container">
      <div class="text-center ">
        <div class="col">
          <h2>About</h2>
          <div class="row justify-content-center">
            <hr style="width: 20%;" size="5px" color="black">
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center fs-5">
      <div class="col-md-8">
        <p class="text-justify"><?php echo $r['summary'] ?></p>
      </div>
    </div>
    <br></br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
      <button class="btn btn-primary btn-lg" type="button"><a style="color: white; text-decoration: none"
          href="mailto:email@domain.com">HIRE ME</button>
      <button class="btn btn-primary btn-lg" type="button"> <a style="color: white; text-decoration: none"
          href="assets/cv.pdf">DOWNLOAD CV</a> </button>
    </div>
    <br></br>
  </section>
  <?php } ?>
  <!-- Akhir About -->

  <!-- Skills -->
  <section class="skills" id="skills">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>Skills</h2>
          <div class="row justify-content-center">
            <hr style="width: 20%;" size="5px" color="black">
            <div class="customer-logos slider">
              <?php
                require_once "koneksi.php";

                $sql = mysqli_query($koneksi, "SELECT * FROM skill");
                while($r=mysqli_fetch_assoc($sql)) {
                echo "<div class='slide'><img src='http://localhost:8055/assets/".$r["gambar"]. "'></div>";
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Skills -->

  <!-- Tools -->
  <section id="tools">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>Tools</h2>
          <div class="row justify-content-center">
            <hr style="width: 20%;" size="5px" color="black">
            <div class="customer-logos slider">
              <?php
                require_once "koneksi.php";

                $sql = mysqli_query($koneksi, "SELECT * FROM tools");
                while($r=mysqli_fetch_assoc($sql)) {
                echo "<div class='slide'><img src='http://localhost:8055/assets/".$r["logo"]. "'></div>";
                }
              ?>
            </div>
          </div>
        </div>
  </section>
  <!-- Akhir Tools -->

  <!-- Akhir Experience -->
  <?php
    require_once "koneksi.php";
    $sql = mysqli_query($koneksi, "SELECT * FROM experience");
    while($r=mysqli_fetch_array($sql)) {
  ?>
  <section class="experience" id="experience">
    <div class="container">
      <div class="text-center ">
        <div class="col">
          <h2>Experience</h2>
          <div class="row justify-content-center">
            <hr style="width: 20%;" size="5px" color="black">
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center fs-5">
      <div class="col-md-6">
        <p><b><?php echo $r['company'] ?> - <?php echo $r['location'] ?> </b>
          <br><i><?php echo $r['position'] ?> </i><i>(<?php echo $r['start'] ?> - <i><?php echo $r['finish'] ?></i>
            )</i></p>
        <ul class="list">
          <?php echo $r['description'] ?>
        </ul>
      </div>
    </div>
  </section>
  <?php } ?>
  <!-- Akhir Experience -->

  <!-- Education -->
  <?php
    require_once "koneksi.php";
    $sql = mysqli_query($koneksi, "SELECT * FROM education");
    while($r=mysqli_fetch_array($sql)) {
  ?>
  <section class="education" id="education">
    <div class="container">
      <div class="text-center ">
        <div class="col">
          <h2>Education</h2>
          <div class="row justify-content-center">
            <hr style="width: 20%;" size="5px" color="black">
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center fs-5">
      <div class="col-md-6">
        <p><b><?php echo $r['institution'] ?></b> <b> (<?php echo $r['start'] ?> </b> <b>-<?php echo $r['finish'] ?>)</b><br><i><?php echo $r['major'] ?> </i> <i> - <?php echo $r['gpa'] ?> </i></p>
        <ul class="list">
          <?php echo $r['description'] ?>
        </ul>
      </div>
    </div>
  </section>
  <?php } ?>
  <!-- Akhir Education -->

  <!-- Projects -->
  <section id="projects">
    <div class="container">
      <div class="text-center ">
        <div class="col">
          <h2>My Projects</h2>
          <div class="row justify-content-center">
            <hr style="width: 20%;" size="5px" color="black">
          </div>
        </div>
      </div>
      <div class="row">
        <?php
          require_once "koneksi.php";

          $sql = mysqli_query($koneksi, "SELECT * FROM portofolio");
          $id = 1;
          while($r=mysqli_fetch_assoc($sql)) {
          // if ($r["id"] %2 == 1) {
          //   echo "<div class='row'>";
          // }
          echo "<div class='col-md-6 mb-12'>";
          echo "<div class='card'>";
          echo "<div class='image'>";
          echo "<img class='image__img' src='http://localhost:8055/assets/".$r["picture"]. "'>";
          echo "<div class='image__overlay image__overlay--primary'>";
          echo "<div class='image__title'>".$r['project_name']."<br></div>";
          echo "<p class='image__description'>".$r['description']."<br>";
          echo "<center><button class='btn btn-primary btn-lg' type=button'> <a style='color: white; text-decoration: none' href=".$r["link"]. "> KLIK HERE </a> </button></center>";
          echo "</p></div></div></div></div>";
          }                      
        ?>
      </div>
  </section>
  <!-- Akhir Projects -->

  <!-- Contact -->
  <?php
    require_once "koneksi.php";
    $sql = mysqli_query($koneksi, "SELECT * FROM biodata");
    while($r=mysqli_fetch_array($sql)) {
  ?>
  <section id="contact">
    <div class="container">
      <div class="row mb-3">
        <div class="col">
          <h2>Contact Me</h2>
          <div class="row justify-content-center">
            <hr style="width: 20%;" size="5px" color="black">
          </div>
          <div class="row" style="margin: 0 10% 0 25%">
            <div class="col-md-6">
              <div class="col-md-12">
                <i class="fas fa-home">&nbsp<?php echo $r['address'] ?></i>
              </div>
              <div class="col-md-12">
                <i class="fab fa-whatsapp-square"> <?php echo $r['phone'] ?></i>
              </div>
            </div>
            <div class="col-md-6">
              <div class="col-md-3">
                <i class="fas fa-envelope">&nbsp<?php echo $r['email'] ?></i>
              </div>
              <div class="col-md-3">
                <i class="fab fa-linkedin"><a style="color: black; text-decoration: none"
                    href="https://www.linkedin.com/in/fikafebrik/">&nbsp<?php echo $r['linkedin'] ?></a></i>
              </div>
              <div class="col-md-3">
                <i class="fab fa-github-square"><a style="color: black; text-decoration: none"
                    href="github.com/fikafebrika">&nbsp<?php echo $r['github'] ?></a></i>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <?php } ?>
  <!-- Akhir Contact -->

  <!-- Footer -->
  <footer class="bg-primary text-white text-center pt-4 pb-2">
    <p>Created by <b>Fika Febrika</b></p>
  </footer>
  <!-- Akhir Footer -->

  <!-- Chat Widget -->
  <button class="open-button btn-lg" onclick="toggleFormUser()">
    <span class="material-icons">
      <i class="far fa-comment-dots"></i>
    </span>
    <span class="badge">99+</span>
    Chat
  </button>
  <div class="chat-popup col-lg-3 col-sm-11 h-75 p-2" id="myForm">
    <form action="#" class="form-container p-2 rounded">
      <div class="head-container container-fluid mb-2">
        <h3 class="name">Full Name</h3>
      </div>

      <div class="container-fluid chat-buble-container m-1 p-1">
        <div class="chat-buble p-0 mb-2 text-left">
          <span class="text-buble">
            Halo, Reply Pesan ini dengan nama!
          </span>
          <span class="time-message text-left">02:15am</span>
        </div>
        <div class="chat-buble p-0 mb-2 text-right">
          <span class="time-message text-left">02:15am</span>
          <span class="text-buble">
            Jeremia DS
          </span>
        </div>
        <div class="chat-buble p-0 mb-2 text-left">
          <span class="text-buble">
            Apa Keluhan Anda? Berikan Keluhan Anda secara detail!
          </span>
          <span class="time-message text-left">02:15am</span>
        </div>
        <div class="chat-buble p-0 mb-2 text-right">
          <span class="time-message text-left">02:15am</span>
          <span class="text-buble">
            Saya Sakit Perut :(
          </span>
        </div>
        <div class="chat-buble p-0 mb-2 text-left">
          <span class="text-buble">
            Lah, kok nanya saya
          </span>
          <span class="time-message text-left">02:15am</span>
        </div>
        <div class="chat-buble p-0 mb-2 text-right">
          <span class="time-message text-left">02:15am</span>
          <span class="text-buble">
            Jadi saya tanya sama siapa dong? Tolongin lah
          </span>
        </div>
        <div class="chat-buble p-0 mb-2 text-left">
          <span class="text-buble">
            Yo Ndak Tau, Kok Tanya Saya
          </span>
          <span class="time-message text-left">02:15am</span>
        </div>
        <div class="chat-buble p-0 mb-2 text-right">
          <span class="time-message text-left">02:15am</span>
          <span class="text-buble">
            Oh aja ya kan :)
          </span>
        </div>
      </div>
      <div class="drag-area flex-column align-items-center justify-content-center rounded">
        <div class="icon material-icons">cloud_upload</i></div>
        <header class="h5">Drag & Drop to Upload File</header>
        <span class="h5">OR</span>
        <button class="h5 p-2 rounded btn-browse">Browse File</button>
        <input type="file" hidden class="input-browse">
      </div>
      <div class="container-fluid bottom-container px-0 align-items-center justify-content-center row">
        <div class="col-2 p-1 pl-2 text-right">
          <button type="button" class="c-blue-btn rounded-circle" onclick="showAttach()">+</button>
        </div>
        <div class="col-9 p-1 text-left">
          <input type="text" name="msg" id="msg" placeholder="Type your message" class="msg w-100"
            onfocus="showTyping()">
        </div>
        <div class="col-1 p-1 text-left">
          <button type="submit" class="c-blue-btn rounded-circle" onclick="sendMessage()">&rarr;</button>
        </div>
      </div>
    </form>
  </div>
  <!-- Akhir Chat Widget -->

  <!-- Java Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  <script src="index.js"></script>
  <!-- JS Slide -->
  <script>
    $(document).ready(function () {
      $('.customer-logos').slick({
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
          breakpoint: 768,
          setting: {
            slidesToShow: 4
          }
        }, {
          breakpoint: 520,
          setting: {
            slidesToShow: 3
          }
        }]
      });
    });
  </script>
  <!-- JS Slide -->
  <!-- Java Script -->
</body>

</html>