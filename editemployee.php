<?php
include("db_conn.php");
$i = $_GET['id'];
$f = $_GET['fullname'];
$a = $_GET['address'];
$c= $_GET['cont'];
$em= $_GET['em'];
$pa=$_GET['pa'];
?>
<?php 
$id = $_GET['id'];
if(isset($_POST['submit'])){
    $idup = $_GET['id'];
    $fname = $_POST['fullname'];
    $addr = $_POST['address'];
    $cont = $_POST['contact'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
$sql = "update `detail` set id=$id,fullname='$fname',address='$addr',contact=$cont,email='$email',password='$pass' where id=$idup ";
$data = mysqli_query($con,$sql);
if($data){
    echo"<script>alert('Updated')</script>";
}
else{
    echo"Failed";
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
    <link rel="stylesheet" href="loginStyle11.css">
    <script src="app.js" defer></script>
</head>

<body style="background-color: aqua;">
    <div class="user_container" id="user_main_container">
        <nav class="navbar">
            <div class="navbar_nav">
                <div class="list_option">
                    <ul class="lists">
                        <li><a href="addemployee.html">Home</a></li>
                        <li><a href="Editemployee.html">Edit details</a></li>
                        <li><a href="home.html">User</a></li>
                        
                    </ul>
                    <div class="dropdown">
                        <button onclick="myFunction()" class="dropbtn">Select</button>
                        <div id="myDropdown" class="dropdown-content">
                            <a href="help.html">User</a>
                            <a href="#">See Profile</a>
                            <a href="#">Setting</a>
                            <a href="#">Help</a>
                            <a href="#">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <form action class="home_form_container" id="user_form" method="post">
            <div class="user_form" id="form_flex">
                <h2 class="payment">Employee Details</h2>
                
                <div class="home_field">
                    <label for="Firstname" class="user_label">First Name:</label>
                    <input type="text" value="<?php echo "$f"?>" name="fullname" id="custname" required />
                </div>
                <div class="home_field">
                    <label for="Lastname" class="user_label">Address:</label>
                    <input type="text" value="<?php echo "$a"?>" name="address" id="custname" required />
                </div>
                <div class="home_field">
                    <label for="address" class="user_label">Contact number:</label>
                    <input type="text" value="<?php echo "$c"?>" name="contact" id="custname" required />
                </div>
                <div class="home_field">
                    <label for="cont_numb" class="user_label">Email:</label>
                    <input type="email" value="<?php echo "$em"?>" name="email" id="custname" required />
                </div>
                <div class="home_field">
                    <label for="email" class="user_label">Password</label>
                    <input type="text" value="<?php echo "$pa"?>" name="password" id="custname" required />
                </div>

                <div class="home_button" id="customer_btn">
                    <input type="submit"  name="submit" class=" btn_btn " id="add_employee" value="Edit employee" ></input>
                </div>
            </div>
        </form>
    </div>
</body>

</html>

<?php
include 'db_conn.php';

if(isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $cont = $_POST['contact'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $query = "insert into detail(fullname,address,contact,email,password)
                   values('$fullname','$address','$cont','$email','$pass')";
    $run = mysqli_query($con,$query);

    if($run){
        ?>
        <script>
            alert("data insterted sucessully");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("data not inserted");
        </script>
        <?php
    }

}
?>