<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fourm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <?php include 'content/header.php'?>
    <?php include 'content/_dbconnect.php'?>
    <?php
   $id=$_GET['catid'];
   if(!empty($_POST) && $_SERVER['REQUEST_METHOD']=='POST'){
    $desc=$_POST['desc'];
    $sql1="INSERT INTO `comment` (`c_desc`, `c_user_id`, `c_cat_id`, `timedate`) VALUES ('$desc', '0', '$id', current_timestamp());";
    $result1=mysqli_query($conn,$sql1);
   }
   $sql="SELECT * FROM `catagory` WHERE catagory_id=$id;";
   $result=mysqli_query($conn,$sql);
   $row=mysqli_fetch_assoc($result);
   if($row){
    $name=$row['catagory_name'];
    $dec=$row['catagory_description'];
    $time=$row['timedate'];

   }
   ?>
    <div class="container mt-3" style="margin: 0%;">
        <h1><?php echo $name ?></h1>
    </div>
    <div class="container mt-2" style="display: flex; margin: 0%;">
        <div class="ml-3" style="display: flex; margin: 0%;">
            <i class="bi bi-person-circle"></i>
            <h5 class="ml-1">Admin</h5>
        </div>
        <div class="ml-3" style="display: flex; margin: 0%;">
            <i class="bi bi-clock"></i>
            <h5 class="ml-1"><?php echo $time ?></h5>
        </div>
    </div>
    <div class="container" style="margin: 0%;">
        <div class="row">
            <div class="col">
                <img src='https://source.unsplash.com/random/?coding,technical' class='card-img' alt='...' width='200px'
                    height='500px'>
            </div>
            <div class="col">
                <?php echo $dec ?>
            </div>

        </div>
    </div>
    <div class="container mt-5 pt-5" style="margin: 0%;">
        <div class="row d-flex">
            <div class="col-md-12 col-lg-10">
                <div class="card text-dark">
                    <div class="card-body p-4">
                        <h4 class="mb-0">Recent comments</h4>
                        <p class="fw-light mb-4 pb-2">Latest Comments section by users</p>
                        <?php
   $sql="SELECT * FROM `comment` WHERE c_cat_id=$id;";
   $result=mysqli_query($conn,$sql);
   while($row=mysqli_fetch_assoc($result)){
    $com_desc=$row['c_desc'];
    $com_id=$row['c_id'];
    $sql1="SELECT date(timedate) FROM `comment` WHERE c_id=$com_id;";
    $res=mysqli_query($conn,$sql1);
    $daterow=mysqli_fetch_assoc($res);
    $date=$daterow['date(timedate)'];
    echo'<div class="d-flex flex-start">
    <img class="rounded-circle shadow-1-strong me-3"
      src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" alt="avatar" width="65"
      height="65" />
    <div class="flex-grow-1 flex-shrink-1">
      <div>
        <div class="d-flex justify-content-between align-items-center">
          <p class="mb-1">
            Maria Smantha <span class="small">'.$date.'</span>
          </p>
          <a href="#!"><i class="bi bi-reply"></i></a>
        </div>
        <p class="small mb-0">
          '.$com_desc.'
        </p>
      </div>

     


    </div>
  </div>        
          <hr class="my-3"/>';

   }
   
   ?>
                    </div>
                </div>
            </div>
        </div>
        <form action="<?php  echo $_SERVER['REQUEST_URI'] ?>" method="post">
        <div class="card-footer pt-3 border-0" style="background-color: #f8f9fa;">
            <div class="d-flex flex-start w-100">
              <img class="rounded-circle shadow-1-strong me-3"
                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp" alt="avatar" width="40"
                height="40" />
              <div class="form-outline w-100">
                <textarea class="form-control" id="textAreaExample" rows="4"
                  style="background: #fff;" name="desc"></textarea>
              </div>
            </div>
            <div class="float-end mb-3 pt-1">
              <button type="submit" class="btn btn-primary btn-sm">Post comment</button>
              <button type="button" class="btn btn-outline-primary btn-sm">Cancel</button>
            </div>
    </div>
    </form>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>