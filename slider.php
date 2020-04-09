<style>
    .img-carousel {
      height: 500px;
      background-position: center bottom;
      background-size: cover;
      background-repeat: no-repeat;
    }
    .carousel-indicators li {
      width: 1.5rem!important;
      height: 1.5rem!important;
      border-radius: 0px!important;
      -webkit-border-radius: 0px;
    }

    .carousel-control-prev span, .carousel-control-next span {
      width: 50px!important;
      height: 50px!important;
    }

    #carouselId {
      border-bottom: 10px solid rgb(0,0,0,0.7);
    }
  </style>

  <div id="carouselId" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselId" data-slide-to="0" class="active"></li>
      <li data-target="#carouselId" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <div class="img-carousel" style="background-image: url(img/banner1.jpg)"></div>
      </div>
      <div class="carousel-item">
      <div class="img-carousel" style="background-image: url(img/banner2.jpg)"></div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>