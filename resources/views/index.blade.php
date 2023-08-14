<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VeryFinal</title>
    <link rel="stylesheet" href="css/stylesheet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  </head>


  <style>
    .bg {

        background-color: #044556;
    }
    .bgbg {
        background-color: white;
    }
  </style>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light mybg">
        <div class="container">
         
          <a class="navbar-brand text-light" href="#">USTP CONeXT</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
         
           <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item active">
                <a class="nav-link text-light" href="#about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#faq">FAQ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#administrators">Administrator</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
   
      <nav class="navbar navbar-expand-lg navbar-dark mybg2">
    <div class="container d-flex justify-content-between align-items-center">
      
        <div class="d-grid gap-2 d-md-flex align-items-center">
            <a class="navbar-register text-dark fs-5" href="/form" style= "text-decoration :none;">Register to be a Legit TRAILBLAZER</a>
           <a href="/form">
            <button id="joinNowButton" class="btn btn-primary btn-sm" type="button">JOIN NOW!</button>
            </a>

            

        </div>

      
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<section id="administrators" class="bg-primary pt-5 pb-5">
      <div class="container mt-5">
        <div class="row pb-5">
          <div class="col-sm-12 text-center text-light">
            <h2>The Administrators</h2>
            <p>
              Our administrators are experts in the field of business and
              technologies with 5 years of experience
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-3 mb-sm-4">
            <div class="card text-center bg-light" style="height: 100%">
              <div class="card-body">
                <img
                  src="/images/anya.jpg"
                  img src="{{ asset('images/anya.jpg') }}" alt="B"
                  class="w-50 rounded-circle"
                  alt=""
                />
                <h5 class="card-title mt-3">Anya Forger</h5>
                <p class="card-text">the deuteragonist of the SPY x FAMILY series. Formerly, she is a telepath whose abilities were created in an experiment conducted by an unknown organization. </p>
                <i class="fab fa-twitter"></i>&nbsp;
                <i class="fab fa-facebook-f"></i>&nbsp;
                <i class="fab fa-instagram"></i>&nbsp;
                <i class="fab fa-linkedin-in"></i>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3 mb-sm-4">
            <div class="card text-center bg-light" style="height: 100%">
              <div class="card-body">
                <img
                  src="/images/loid.jpg"
                  img src="{{ asset('images/loid.jpg') }}" alt="R"
                  class="w-50 rounded-circle"
                  alt=""
                />
                <h5 class="card-title mt-3">Loid Forger</h5>
                <p class="card-text">The adoptive father of Anya, who works undercover as a psychiatrist working in Ostania, while he secretly works as a spy for WISE. Yor Forger: The mother of the family.</p>
                <i class="fab fa-twitter"></i>&nbsp;
                <i class="fab fa-facebook-f"></i>&nbsp;
                <i class="fab fa-instagram"></i>&nbsp;
                <i class="fab fa-linkedin-in"></i>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3 mb-sm-4">
            <div class="card text-center bg-light" style="height: 100%">
              <div class="card-body">
                <img
                  src="/images/yor.jpg"
                  img src="{{ asset('images/yor.jpg') }}" alt="E"
                  class="w-50 rounded-circle"
                  alt=""
                />
                <h5 class="card-title mt-3">Yor Forger</h5>
                <p class="card-text">the tritagonist of the Spy × Family franchise. She is a 27-year-old assassin who is pretending to be married to Loid Forger and pretending to be the mother of Anya Forger. As an assassin working for the Garden, she is known by her code-name, the "Thorn Princess". She was voiced by.</p>
                <i class="fab fa-twitter"></i>&nbsp;
                <i class="fab fa-facebook-f"></i>&nbsp;
                <i class="fab fa-instagram"></i>&nbsp;
                <i class="fab fa-linkedin-in"></i>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-3 mb-sm-4">
            <div class="card text-center bg-light" style="height: 100%">
              <div class="card-body">
                <img
                  src="/images/bond.jpg"
                  img src="{{ asset('images/bond.jpg') }}" alt="N"
                  class="w-50 rounded-circle"
                  alt=""
                />
                <h5 class="card-title mt-3">Bond Forger</h5>
                <p class="card-text">one of the main characters of the SPY x FAMILY series. He is the pet of the Forger Family. Formerly known as Subject 8 実験体8号, Jikkentai 8-gō, lit.</p>
                <i class="fab fa-twitter"></i>&nbsp;
                <i class="fab fa-facebook-f"></i>&nbsp;
                <i class="fab fa-instagram"></i>&nbsp;
                <i class="fab fa-linkedin-in"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



  










<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>