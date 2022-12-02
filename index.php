<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <?php require 'partials/_header.php'; ?>

  <!-- Slider Starts here -->

  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="partials/cd4.jpg" width="1375" height="450" alt="...">
    </div>
    <div class="carousel-item">
      <img src="partials/cd5.jpg" width="1375" height="450" alt="...">
    </div>
    <div class="carousel-item">
      <img src="partials/cd3.jpg" width="1375" height="450" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

  <div class="container my-3">
    <h2 class="text-center">iDiscuss- Categories</h2>
    <div class="row ">

      <div class="col-md-4">
        <div class="card my-2" style="width: 18rem;">
          <img src="partials/python.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Python</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
              the card's content.</p>
            <a href="#" class="btn btn-primary">View threads</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php require 'partials/_footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
  </script>
</body>

</html>