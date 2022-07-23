<?php
$server ="localhost";
$username ="root";
$password ="";
$dbname ="crudoperation";

$con= mysqli_connect($server, $username, $password, $dbname);

if(isset($_POST['submit'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['password'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $password=$_POST['password'];

        $sql="insert into crud(name,email,mobile,password) values ('$name','$email','$mobile','$password') ";
        $result=mysqli_query($con,$sql) or die(mysqli_error());

        if($result){
            //echo "Data inserted successfully";
            header('location:display.php');
        }
        else{
            echo "Data not inserted";
        }

    }
    else{
        die(mysqli_error($con));
        //echo "error";
    }
}


?>