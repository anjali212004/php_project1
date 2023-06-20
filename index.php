<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>MyQuestioner</title>
  </head>
  <body>
  <?php include 'partials/dbconnect.php';?>
  <?php include 'partials/header.php';?>
 



  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8Y29kaW5nfGVufDB8fDB8fHww&w=1000&q=80" height="500" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8Y29kaW5nfGVufDB8fDB8fHww&w=1000&q=80" height="500"  alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8Y29kaW5nfGVufDB8fDB8fHww&w=1000&q=80" height="500" alt="Third slide">
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

<!-- cards -->
  
  <div class="container">
    <h1 class="text-center my-2" >CATEGORIES</h1>
    <div class="row">

    <!-- fetch data from my sql -->
    <?php
    $sql = "SELECT * FROM `category`"; 
    $result = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_assoc($result)){

      $cat = $row['category_name'];
      $id = $row['category_id'];
      $desc = $row['category_discription'];
      echo '<div class="col-md-4 my-2">
         <div class="card" style="width: 18rem;">
         <img src="card-'.$id. '.jpg" class="card-img-top" height= "200" width = "200"alt="image for this category">
          <div class="card-body">
              <h5 class="card-title"><a href="threads.php?catid=' . $id . '">' . $cat . '</a></h5>
              <p class="card-text">' . substr($desc, 0, 80). '... </p>
              <a href="threads.php?catid=' . $id . '" class="btn btn-primary">View Threads</a>
          </div>
      </div>
    </div>';}
    ?>
  </div> 
  </div> 


  <?php include 'partials/footerr.php';?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>