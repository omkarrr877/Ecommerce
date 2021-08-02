<?php include('include/header.inc.php');?>
<div class="top-nav bg-dark text-center p-2">
  <label class="text-light">Sale Up To 50% Biggest Discounts. Hurry! Limited Perriod Offer <a id="#card"
      class="text-warning" href="#hidedetails">Shop Now</a></label>
</div>
<section class="main">
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img
          src="https://images.unsplash.com/photo-1487744480471-9ca1bca6fb7d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1068&q=80"
          class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block bg-light">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img
          src="https://images.unsplash.com/photo-1483985988355-763728e1935b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
          class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block bg-light">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img
          src="https://images.unsplash.com/photo-1511733897353-5b04f82435a8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
          class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block bg-light">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<div class="container-fluid mb-5">
  <div class="container-sm mt-5">
    <div class="row row-cols-1 row-cols-md-3 g-4 text-center">
      <div class="col">
        <div class="card h-100" id="hidedetails">
          <a href="#" rel="noopener noreferrer"><img src="https://preview.colorlib.com/theme/capitalshop/assets/img/gallery/xitems2.jpg.pagespeed.ic.rorSvQkHIK.webp" class="card-img-top" alt="..."></a>
          <div class="card-body">
            <label class="card-title"> Women's Fashion</label>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100" id="hidedetails">
          <a href="#"><img src="https://preview.colorlib.com/theme/capitalshop/assets/img/gallery/xitems3.jpg.pagespeed.ic.oIlAW2CB1j.webp" class="card-img-top" alt="..."></a>
          <div class="card-body">
            <label class="card-title">Kid's Fashion</label>
            
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100" id="hidedetails">
          <a href=""><img src="https://preview.colorlib.com/theme/capitalshop/assets/img/gallery/xitems1.jpg.pagespeed.ic.oEs2Is3V_r.webp" class="card-img-top" alt="..."></a>
          <div class="card-body">
            <label class="card-title"> Men's Fashion</label>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




</section>

<?php include('include/footer.inc.php') ?>