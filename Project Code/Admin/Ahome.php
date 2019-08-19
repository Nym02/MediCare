<?php
  session_start();

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Home | MediCare</title>
    <!-- -css files- -->
    <link rel="stylesheet" href="../css/all.min.css" />

    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/owl.carousel.css" />
    <link rel="stylesheet" href="../css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/index1Res.css" />

    <!-- js files -->

    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/index.js"></script>
  </head>
  <body>
    <header class="header-area">
      <!---header area starts----->
      <div class="logo-bar">
        <!---logo area starts----->


      <nav class="navbar navbar-dark bg-dark  navbar-expand-md">

          <div class="container">
            <a class="navbar-brand active" href="Ahome.php">Home</a>
            <ul class="navbar-nav">
  
                <li class="nav-item"><a class="nav-link" href="user_view.php">View User</a></li>
                <li class="nav-item"><a class="nav-link" href="delete_user.php">Delete user</a></li>
                <li class="nav-item"><a class="nav-link" href="update.php">update User</a></li>
                <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
            </ul>
        </div>
      </nav>
      <!-------logo area ends----->
    </header>

    <section class="getStarted">
      <div class="doc-quote">
        <h1>we take <span>care</span></h1>
        <h3>
          We at MediCare are always fully focused on helping patients to
          overcame any hurdle, whether it’s chicken pox or just a seasonal flue.
        </h3>
        <button>get started</button>
      </div>
    </section>

    <section class="introDoc">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-12 introDoc__text">
            <h2>Welcome</h2>
            <p class="lead">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil
              sunt sed voluptate ducimus, culpa porro suscipit aliquid eligendi
              officiis esse modi voluptatum ut quisquam hic! Laborum non,
              suscipit officia tempore iusto tempora? Porro fugit aspernatur
              repellat totam sint amet distinctio sed minima eaque! Numquam hic
              saepe eveniet ex, adipisci possimus?
            </p>
          </div>
          <div class="col-md-6 col-sm-12  introDoc__img">
            <div class="introDoc__img-1">
              <img src="img/about-1.jpg" alt="" />
            </div>
            <div class="introDoc__img-2">
              <img src="img/about-2.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="service">
      <div class="container">
        <div class="row service-row">
          <div class="col-md-12">
            <div class="service__header">
              <h2>Our Services</h2>
            </div>
            <div class="service__contents owl-carousel">
              <div class="service__contents-1">
                <h3>Radiology</h3>
                <p class="lead">
                  <span>Radiologists</span> are medical doctors that specialize
                  in diagnosing and treating injuries and diseases using medical
                  imaging
                  <span>(radiology)</span>
                  procedures (exams/tests) such as X-rays, computed tomography
                  (CT), magnetic resonance imaging (MRI), nuclear medicine,
                  positron emission tomography (PET) and ultrasound.
                </p>
              </div>
              <div class="service__contents-1">
                <h3>Cancer</h3>
                <p class="lead">
                  <span>Cancer</span> is a group of diseases involving abnormal
                  cell growth with the potential to invade or spread to other
                  parts of the body. These contrast with benign tumors, which do
                  not spread.
                </p>
              </div>
              <div class="service__contents-1">
                <h3>Cardiovascular</h3>
                <p class="lead">
                  <span>Cardiovascular</span> disease generally refers to
                  conditions that involve narrowed or blocked blood vessels that
                  can lead to a <span>heart attack</span>, chest pain (angina)
                  or stroke.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- reviews section -->
    <section class="reviews">
      <div class="container">
        <div class="row service-row">
          <div class="col-md-12 text-center">
            <div class="service__header">
              <h2>Reviews</h2>
            </div>
            <div class="service__contents owl-carousel">
              <div class=".review__contents-1 ">
                <p class="lead">
                  <span>Radiologists</span> are medical doctors that specialize
                  in diagnosing and treating injuries and diseases using medical
                  imaging
                  <span>(radiology)</span>
                  procedures (exams/tests) such as X-rays, computed tomography
                  (CT), magnetic resonance imaging (MRI), nuclear medicine,
                  positron emission tomography (PET) and ultrasound.
                </p>
              </div>
              <div class=".review__contents-1 ">
                <p class="lead">
                  <span>Cancer</span> is a group of diseases involving abnormal
                  cell growth with the potential to invade or spread to other
                  parts of the body. These contrast with benign tumors, which do
                  not spread.
                </p>
              </div>
              <div class=".review__contents-1 ">
                <p class="lead">
                  <span>Cardiovascular</span> disease generally refers to
                  conditions that involve narrowed or blocked blood vessels that
                  can lead to a <span>heart attack</span>, chest pain (angina)
                  or stroke.
                </p>
              </div>
            </div>
            <button class="btn btn-danger mb-2 mt-2">Explore</button>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
