<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('WebTemplate.main')
    <body>
    <!-- Navbar -->
    @include('WebTemplate.header')
    <!-- Navbar -->
    <main>
    <!-- WELCOME -->
    <!-- Carousel wrapper -->
    <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong mt-1" data-mdb-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-mdb-target="#introCarousel" data-mdb-slide-to="0" class="active"></li>
          <li data-mdb-target="#introCarousel" data-mdb-slide-to="1"></li>
          <li data-mdb-target="#introCarousel" data-mdb-slide-to="2"></li>
        </ol>

        <!-- Inner -->
        <div class="carousel-inner">
          <!-- Single item -->
          <div class="carousel-item active">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
              <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white text-center">
                  <h1 class="mb-3">Maxwell Scientific Publication</h1>
                  <h5 class="mb-4">Simple way to submit your Article</h5>
                  <a
                    class="btn btn-outline-light btn-lg m-2"
                    href="https://www.youtube.com/watch?v=c9B4TPnak1A"
                    role="button"
                    rel="nofollow"
                    target="_blank"
                    >Submit Manuscript</a
                  >
                  <a
                    class="btn btn-outline-light btn-lg m-2"
                    href="https://mdbootstrap.com/docs/standard/"
                    target="_blank"
                    role="button"
                    >Journal Catalog</a
                  >
                </div>
              </div>
            </div>
          </div>

          <!-- Single item -->
          <div class="carousel-item">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
              <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white text-center">
                  <h2>Become our Editor</h2>
                  <a
                    class="btn btn-outline-light btn-lg m-2"
                    href="https://www.youtube.com/watch?v=c9B4TPnak1A"
                    role="button"
                    rel="nofollow"
                    target="_blank"
                    >Apply Now</a
                  >
                </div>
              </div>
            </div>
          </div>

          <!-- Single item -->
          <div class="carousel-item">
            <div
              class="mask"
              style="
                background: linear-gradient(
                  45deg,
                  rgba(29, 236, 197, 0.7),
                  rgba(91, 14, 214, 0.7) 100%
                );
              "
            >
              <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white text-center">
                  <h2>Journals Subscription</h2>
                  <a
                    class="btn btn-outline-light btn-lg m-2"
                    href="https://mdbootstrap.com/docs/standard/content-styles/masks/"
                    target="_blank"
                    role="button"
                    >Get Now</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Inner -->

        <!-- Controls -->
        <a class="carousel-control-prev" href="#introCarousel" role="button" data-mdb-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#introCarousel" role="button" data-mdb-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- Carousel wrapper -->
    <section class="pt-4 pt-md-11">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-5 col-lg-6 gx-5 order-md-2">
                    <!-- Welcome Image -->
                    <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                    <img src="{{ url('/images/img2.jpg') }}" class="img-fluid">
                    <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                    </div>
                </div>
                <div class="col-12 col-md-7 col-lg-6 gx-5 order-md-1">
                    <!-- Heading -->
                    <h1 class="display-3 text-center text-md-start"> WELCOME TO 
                        <br>
                        <span class="text-primary"> MAXWELL Scientific Publication</span>
                    </h1>
                    <!-- Text -->
                    <p class="lead text-center text-md-start text-muted mb-6 mb-lg-8">
                        About North American Publishers About North American Publishers About North American Publishers
                    </p>
                    <!-- Buttons -->
                    <div class="text-center text-md-start">
                        <a href="" class="btn btn-primary btn-rounded btn-lg me-2">View All Pages  <i class="ps-1 arrow right"></i></a>
                        <a href="" class="btn btn-light btn-rounded btn-lg">Documentation</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./WELCOME -->
    <!-- FEATURES -->
<section class="py-5 py-md-11 border-bottom">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-5">
            <div class="col h-100">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body text-white bg-dark">
                    <h5 class="card-title">Journal title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Journal Page <i class="arrow right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col h-100">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body text-white bg-dark">
                    <h5 class="card-title">Journal title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Journal Page <i class="arrow right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col h-100">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body text-white bg-dark">
                        <h5 class="card-title">Journal title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Journal Page <i class="arrow right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col h-100">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body text-white bg-dark">
                        <h5 class="card-title">Journal title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Journal Page <i class="arrow right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col h-100">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body text-white bg-dark">
                        <h5 class="card-title">Journal title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Journal Page <i class="arrow right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- ./ FEATURES -->
</main>
    <!-- Footer -->
    @include('WebTemplate.footer')
    <!-- ./Footer -->
    </body>
</html>