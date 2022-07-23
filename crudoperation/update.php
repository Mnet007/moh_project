<<?php
$server ="localhost";
$username ="root";
$password ="";
$dbname ="crudoperation";

$con= mysqli_connect($server, $username, $password, $dbname);

$id=$_GET['updateid'];
$sql="Select * from crud where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $password=$_POST['password'];

        $sql="update crud set (name,email,mobile,password) values ('$name','$email','$mobile','$password') where id=$id ";
        $result=mysqli_query($con,$sql);

        if($result){
            echo "Updated successfully";
            //header('location:display.php');
        }else{
            die(mysqli_error($con));
            //echo "error";
        }
        /*else{
            echo "Data not inserted";
        }*/
        
}

?>

<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
    
    <title>Crud operation</title>
</head>

<body>
    <div class="container my-5">
        <form action="connect.php" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" value=<?php echo $name;?>>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email"value=<?php echo $email;?>>
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off" value=<?php echo $mobile;?>>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter your password" name="password" autocomplete="off" value=<?php echo $password;?>>
            </div>
            
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>

</body>
</html>