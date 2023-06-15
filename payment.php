<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="loginStyle11.css">
    <script src="app.js" defer></script>
</head>

<body >
    <div class="user_container" id="user_main_container">
        <nav class="navbar">
            <div class="navbar_nav" style="margin-left: -400px;">
                <div class="list_option">
                    <ul class="lists">
                        <a href="user.php"><img  class="logo_img" src="logo.jpg" alt="logo_image" style="width:50px;height:50px;margin-bottom: -10px;margin-right:350px;"></a>
                        <li><a href="user.php">Home</a></li>
                        <li><a href="payment.php">Payment</a></li>
                        <li><a href="viewbill_user.php">Print Bill</a></li>
                    </ul>
                    
                </div>
            </div>
        </nav>
        <form method="post" class="home_form_container" id="user_form">
            <div class="user_form" id="form_flex">
                <h2 class="payment">Payment</h2>
                <div class="home_field">
                    <label for="custname" class="user_label">Customer ID:</label>
                    <input type="text" name="custid" id="custname" required />
                </div>
                <div class="home_field">
                    <label for="custname" class="user_label">Bank Name:</label>
                    <input type="text" name="custname" id="custname" required />
                </div>
                <div class="home_field">
                    <label for="custname_id" class="user_label">Bank Acc No:</label>
                    <input type="text" name="custname_id" id="custname" required />
                </div>
                <div class="home_field">
                    <label for="prev_reading" class="user_label">Name:</label>
                    <input type="text" name="prev_reading" id="custname" required />
                </div>
                <div class="home_field">
                    <label for="pres_reading" class="user_label">Phone:</label>
                    <input type="text" name="pres_reading" id="custname" required />
                </div>
                <div class="home_field">
                    <label for="total_amt" class="user_label">Total Amount:</label>
                    <input type="text" name="total_amt" id="custname" required />
                </div>

                <div class="home_button">
                    <input type="submit" name="submit" value="Pay" class="pay_btn btn_btn" onclick=""></button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
<?php
include 'db_conn.php';

if(isset($_POST['submit'])){
    $cid = $_POST['custid'];
    $fullname = $_POST['custname'];
    $address = $_POST['custname_id'];
    $cont = $_POST['prev_reading'];
    $email = $_POST['pres_reading'];
    $pass = $_POST['total_amt'];

    $query = "insert into payment(cus,bname,bacc,name,phone,total)
                   values($cid,'$fullname',$address,'$cont','$email',$pass)";
    $run = mysqli_query($con,$query);

    if($run){
        ?>
        <script>
            alert("Payment done sucessully");
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