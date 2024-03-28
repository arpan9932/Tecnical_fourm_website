
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

   <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
  <symbol id="check-circle-fill" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>
<?php
if(isset($_GET['message']) && $_GET['message']=="true"){
  echo'<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
  <strong>Signup Success!</strong> You can login now...
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
';
}
if(isset($_GET['message']) && $_GET['message']=="email aredy exits"){
  echo'<div class="alert alert-warning alert-dismissible fade show my-0" role="alert">
  <strong>Signup failed!</strong> Your email alredy exits...
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
';
}
if(isset($_GET['message']) && $_GET['message']=="both password must be same"){
  echo'<div class="alert alert-warning alert-dismissible fade show my-0" role="alert">
  <strong>Signup failed!</strong> Both password must be same...
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
';
}
if(isset($_GET['showError']) && $_GET['showError']=="pass err"){
  echo'<div class="alert alert-warning alert-dismissible fade show my-0" role="alert">
  <strong>login failed!</strong> Wrong password...
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
';
}
if(isset($_GET['showError']) && $_GET['showError']=="false"){
  echo'<div class="alert alert-warning alert-dismissible fade show my-0" role="alert">
  <strong>Login failed!</strong> Email not found...
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
';
}
?>

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