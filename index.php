
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fourm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
   <?php include 'content/header.php'?>
   <?php include 'content/_dbconnect.php'?>
    <!-- slider -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="https://source.unsplash.com/random/1600x400/?technology" class="card-img" alt="...">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://source.unsplash.com/random/1600x400/?tech" class="card-img" alt="...">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://source.unsplash.com/random/1600x400/?machine" class="card-img" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- slider end  -->

  <!-- container -->
    <div class="contanier mt-3">
      <h2 class=" m-3">Catagory</h2>
      <div class="row">
  <!-- using for loop -->
  <?php
  $sql="SELECT * FROM `catagory`";
  $result=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_assoc($result)){
    $id=$row['catagory_id'];
    $name=$row['catagory_name'];
    $dec=$row['catagory_description'];
    echo"<div class='col-12'>
    <div class='card mb-3'>
      <div class='row no-gutters'>
        <div class='col-2'>
          <img src='https://source.unsplash.com/random/?".$name.",coding,technical' class='card-img' alt='...' width='100px' height='150px'>
        </div>
        <div class='col-md-8'>
          <div class='card-body'>
            <h5 class='card-title'>".$name."</h5>
            <p class='card-text'>".substr($dec,0,120)."......</p>
            <a href='threadlist.php?catid=".$id."' class='btn btn-primary'>see more</a>
          </div>
        </div>
      </div>
    </div> 
  </div>";
    }
        

?>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>