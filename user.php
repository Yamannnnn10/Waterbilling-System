<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
    <link rel="stylesheet" href="Admin13.css">
    <script src="app.js" defer></script>
</head>

<body style="background-color: aqua;">
    <div class="user_container" id="user_main_container">
        <nav class="navbar" style="margin-left: -400px;">
            <div class="navbar_nav">
                <div class="list_option" >
                    <ul class="lists">
                        <a href="user.php"><img  class="logo_img" src="logo.jpg" alt="logo_image" style="width:50px;height:50px;margin-bottom:-10px;margin-right:290px;"></a>
                        <li><a href="user.php">Home</a></li>
                        <li><a href="payment.php">Payment</a></li>
                        <li><a href="viewbill_user.php">Print Bill</a></li>
                    </ul>
                    <a href="Login.php"><input type="button" name="Log in" id="logButton" value="Logout" style="width:100px;height:40px;margin-right:5px;margin-top:-4px;"></a>
                </div>
            </div>
        </nav>
        <section class="main">
            <div class="box">
                <h3 class="para">Print bill</h3>
                <a href="viewbill_user.php"><button class="btn" id="btn">View<button></a>
            </div>
            <div class="box1">
                <h3 class="para">Payment</h3>
                <a href="payment.php"><button class="btn" id="btn">View</button></a>  
            </div>
        </section>

    </div>
</body>

</html>