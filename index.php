<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/Website/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>   
  </head>
  <body>
  <?php include './components/nav.php';?>  
    <div class="pozadina">
        <h1 class="hero-text">Teretana</h1>
    </div>
    <div class="row bojapozadine">
      <div class="col-sm-4">
        <img src="./images/image.jpg" class="img-fluid teretana">
      </div>
      <div class="col-sm-8 grid teretana">
      <p class="txt">
      </p><br>
          <div class="rounded bg-dark p-5">
                <ul class="nav nav-pills justify-content-between mb-3">
                    <li class="nav-item w-50">
                        <?php
                        if(isset($_SESSION["email"]))
                        {
                            echo '<div class="row"><div class="col-sm-6"><a class="nav-link text-uppercase text-center w-100 active" id="submit" href="./pages/about.php">O nama</a></div>
                            <div class="col-sm-6"><a class="nav-link text-uppercase text-center w-100 active" id="submit" href="./pages/rezervacija.php">Rezervacija treninga</a></div></div>';
                        }
                        else{
                            echo '<a class="nav-link text-uppercase text-center w-100 active" id="submit" href="./pages/about.php">O nama</a>';
                        }
                        ?>
                        
                    </li>
                </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active">
                    <p class="mb-0 txt">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="classes-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic"><img src="./images/weightlifting.jpg" class="img-fluid"></div>
                        <div class="ci-text">
                            <span>SNAGA</span>
                            <a href="./pages/about.php"><i class="fa fa-angle-right"></i></a>
                            <h5>TRENINZI SNAGE</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic"><img src="./images/running.jpg" class="img-fluid"></div>
                        <div class="ci-text">
                            <span>KARDIO</span>
                            <a href="./pages/about.php"><i class="fa fa-angle-right"></i></a>
                            <h5>TRENINZI KARDIA</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic"><img src="./images/tegovi.jpg" class="img-fluid"></div>
                        <div class="ci-text">
                            <span>BODIBILDING</span>
                            <a href="./pages/about.php"><i class="fa fa-angle-right"></i></a>
                            <h5>TRENINZI BODIBILDINGA</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="class-item">
                        <div class="ci-pic"><img src="./images/trening.jpg" class="img-fluid"></div>
                        <div class="ci-text">
                            <span>TRENINZI</span>
                            <a href="./pages/about.php"><i class="fa fa-angle-right"></i></a>
                            <h5>INDIVIDUALNI TRENINZI</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="class-item">
                        <div class="ci-pic"><img src="./images/biceps.jpg" class="img-fluid"></div>
                        <div class="ci-text">
                            <span>TRENINZI</span>
                            <a href="./pages/about.php"><i class="fa fa-angle-right"></i></a>
                            <h5>PERSONALNI TRENINZI</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<section id="testimonials-slider" class="testimonials">
      <div class="container">
          <div id="demo" class="carouselvisina carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
              </div>
       <div class="carousel-inner">
       <div class="carousel-item active">
       <div class="testimonial-item">
                <img src="./images/trener3.jpg" class="testimonial-img">
                <h3>Uros Stepic</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
    </div>
        <div class="carousel-item">
        <div class="testimonial-item">
                <img src="./images/trener1.jpg" class="testimonial-img">
                <h3>Nikola Milosevic</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
        </div>
       </div>
       <div class="carousel-item">
           <div class="testimonial-item">
                <img src="./images/trener2.jpg" class="testimonial-img">
                <h3>Natalija Simovic</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
            </div>
       </div>
    </div>
</div>
    </section>
<div class="gettouch-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa fa-map-marker"></i>
                        <p>Ulica Cara Lazara 45, Kraljevo</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa fa-mobile"></i>
                        <ul>
                            <li>062/123-321</li>
                            <li>064/111-222</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gt-text email">
                        <i class="fa fa-envelope"></i>
                        <p>vujovicnikola15@gmiail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include './components/sectionfooter.php';?>  


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  </body>
</html>
