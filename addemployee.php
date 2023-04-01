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
            <div class="navbar_nav" style="margin-right: 155px;">
                <div class="list_option">
                    <ul class="lists">
                        <a href="Admin.php"><img  class="logo_img" src="logo.jpg" alt="logo_image" style="width:50px;height:50px;margin-bottom: -10px; margin-right:35px;"></a>
                        <li><a href="Admin.php">Home</a></li>
                        <li><a href="addemployee.php">Add detail</a></li>
                        <li><a href="viewdetail.php">View details</a></li>
                        <li><a href="viewbill.php">View Bill</a></li>
                        <li><a href="viewpayment.php">Payment details</a></li>
                    </ul>
                    
                </div>
            </div>
        </nav>
        <form action class="home_form_container" id="user_form" method="post">
            <div class="user_form" id="form_flex">
                <h2 class="payment">Employee Details</h2>
                <div class="home_field">
                    <label for="Firstname" class="user_label">First Name:</label>
                    <input type="text" name="fullname" id="custname" required />
                </div>
                <div class="home_field">
                    <label for="Lastname" class="user_label">Address:</label>
                    <input type="text" name="address" id="custname" required />
                </div>
                <div class="home_field">
                    <label for="address" class="user_label">Contact number:</label>
                    <input type="text" name="contact" id="custname" required />
                </div>
                <div class="home_field">
                    <label for="cont_numb" class="user_label">Email:</label>
                    <input type="email" name="email" id="custname" required />
                </div>
                <div class="home_field">
                    <label for="email" class="user_label">Password</label>
                    <input type="password" name="password" id="custname" required />
                </div>

                <div class="home_button" id="customer_btn">
                    <input type="submit"  name="submit" class=" btn_btn " id="add_employee" value="Add employee" ></input>
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