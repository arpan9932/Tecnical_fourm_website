<?php
$showError="false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $email = $_POST['Email'];
    $pass = $_POST['password'];

    $sql ="SELECT * FROM `users` WHERE email='$email';";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    if($numRows==1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($pass, $row['password'])){
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['sno'] = $row['sno'];
            $_SESSION['useremail'] = $email;
            $_SESSION['name'] = $row['name'];
            header("Location:/FOURM/index.php");
            exit();
        } 
        else{
            $showError='pass err';
             header("Location:/FOURM/index.php?showError=$showError"); 
             exit();
        } 
    }
    header("Location:/FOURM/index.php?showError=$showError");  
}

?>