<?php include_once("lib/layouts/header.php"); ?>
<?php include_once("lib/layouts/nav.php"); ?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="images/210902.jpg"  alt="img1">
        <div class="carousel-caption d-none d-md-block">
            <h5>HI</h5>
            <p>All</p>
        </div>
    </div>
    <div class="carousel-item">
    <img src="images/210922.jpg" alt="img1" >
        <div class="carousel-caption d-none d-md-block">
            <h5>HI</h5>
            <p>All</p>
        </div>
    </div>
    <div class="carousel-item">
    <img src="images/211076.jpg" alt="img1" >
        <div class="carousel-caption d-none d-md-block">
            <h5>HI</h5>
            <p>All</p>
        </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>


<div class="gallery">
  <div class="title">
      Gallery
  </div><br>
  <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="images/210902.jpg" alt="Card image cap" class="gallery-img">
  </div>
  <div class="card">
    <img class="card-img-top" src="images/210922.jpg" alt="Card image cap" class="gallery-img">
  </div>
  <div class="card">
    <img class="card-img-top" src="images/210957.jpg" alt="Card image cap" class="gallery-img">
  </div>
  <div class="card">
    <img class="card-img-top" src="images/873.jpg" alt="Card image cap" class="gallery-img">
  </div>
</div>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="images/210902.jpg" alt="Card image cap" class="gallery-img">
  </div>
  <div class="card">
    <img class="card-img-top" src="images/210922.jpg" alt="Card image cap" class="gallery-img">
  </div>
  <div class="card">
    <img class="card-img-top" src="images/210957.jpg" alt="Card image cap" class="gallery-img">
  </div>
  <div class="card">
    <img class="card-img-top" src="images/873.jpg" alt="Card image cap" class="gallery-img">
  </div>
</div>
</div>
<div class="home-content">
    <div class="title">
      Features  
    </div><br>
    <div class="feature-content">
      <table>
        <tr>
          <td>
              <div class="box-feature-home">
                <div class="box-title-home">
                  Admin
                </div>
              </div>
          </td>
          <td>
          &nbsp;
          </td>
          <td>
              <div class="box-feature-home">
                <div class="box-title-home">
                  User
                </div>
              </div>
          </td>
        </tr>
      </table>    
    </div>
</div>

<?php include_once("lib/layouts/footer.php")?>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
