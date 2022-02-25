<?php

$con=mysqli_connect('localhost','root','','ecommerce');

if(isset($_POST['submit'])){
    $Name=$_POST['name'];
    $Email=$_POST['email'];
    $Number=$_POST['number'];
    $Password=$_POST['password'];
    $Cpassword=$_POST['cpassword'];
    if($Password===$Cpassword){

    
                $Dup_Email=mysqli_query($con, "SELECT * FROM `user` WHERE Email='$Email' ");
                $Dup_Username=mysqli_query($con, "SELECT * FROM `user` WHERE UserName='$Name' ");
    if(mysqli_num_rows($Dup_Email)){

        echo"
        <script>
        alert('This email is already taken');
        window.location.href='register.php';
        </script>
        ";
    }
    if(mysqli_num_rows($Dup_Username)){

        echo"
        <script>
        alert('This username is already taken');
        window.location.href='register.php';
        </script>
        ";
    }

    else{
        mysqli_query($con,"INSERT INTO `user`(`UserName`, `Email`, `Number`, `Password`, `Cpassword`) 
                                     VALUES ('$Name','$Email','$Number','$Password','$Cpassword')");
            echo"
            <script>
            alert('Registration Succefully Done');
            window.location.href='login.php';
            </script>
            ";

    }

}

else{
    echo "
    <script>
    alert('password and confirm password are not same');
    window.location.href='register.php';
    </script>
    ";
}
}
?>