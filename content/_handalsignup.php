<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $alart="false";
    include '_dbconnect.php';
    $name=$_POST['Name'];
    $email=$_POST['Email'];
    $fpass=$_POST['fPassword'];
    $spass=$_POST['sPassword'];
    // check for email existance
    $exitsql="SELECT * FROM `users` WHERE email ='$email'";
    $result=mysqli_query($conn,$exitsql);
    $rowcount=mysqli_num_rows($result);
    if($rowcount>0){ 
        $alart='email aredy exits'; 
        header("location:/FOURM/index.php?message=$alart");
        exit();
    } 
    else{
         if($spass==$fpass){
            $hash=password_hash($fpass,PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`name`, `email`, `password`, `tdate`) VALUES ('$name', '$email', '$hash', current_timestamp());";
            $result = mysqli_query($conn,$sql);
            echo $result;
            if($result){
                $alart="true";
                header("location:/FOURM/index.php?message=$alart");
                exit();
            }
        }
        else{
            $alart='both password must be same';
            header("location:/FOURM/index.php?message=$alart");
            exit();
         }
         
         header("location:/FOURM/index.php?message=$alart");
    }

}
?>