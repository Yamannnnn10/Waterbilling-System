<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
    <link rel="stylesheet" href="Admin13.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="app.js" defer></script>
</head>

<body style="background-color: aqua;">
    <div class="user_container" id="user_main_container">
        <nav class="navbar">
            <div class="navbar_nav">
                <div class="list_option">
                    <ul class="lists">
                    <a href="Admin.php"><img  class="logo_img" src="logo.jpg" alt="logo_image" style="width:50px;height:50px;margin-bottom: -10px;margin-right:455px;"></a>
                        <li><a href="Admin.php">Home</a></li>
                        <li><a href="addemployee.php">Add detail</a></li>
                        <li><a href="viewdetail.php">View details</a></li>
                        <li><a href="viewbill.php">View Bill</a></li>
                        <li><a href="viewpayment.php">Payment details</a></li>
                    </ul>
                    
                </div>
            </div>
        </nav>
        <div class="main-div">
        <div class="center-div">
        <h1 class="center">Payment details</h1>
            <table id="customers">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Bank name</th>
                        <th>Bank acc</th>
                        <th>Full Name</th>
                        <th>Phone</th>
                        <th>Total</th>
                        
</tr>
</thead>
<tbody>
<?php

include 'db_conn.php';
$selectquery = "select * from payment";
$query = mysqli_query($con,$selectquery);

while($res = mysqli_fetch_array($query)){
    ?>
    <tr>
        <td><?php  echo $res['cus'] . "<br>"; ?></td>
        <td><?php  echo $res['bname'] . "<br>"; ?></td>
        <td><?php  echo  $res['bacc'] . "<br>"; ?> </td>
        <td><?php  echo  $res['name'] . "<br>"; ?> </td>
        <td><?php  echo  $res['phone'] . "<br>"; ?> </td>
        <td><?php  echo  $res['total'] . "<br>"; ?> </td>      
</tr>

<?php

}
?>

    
</tbody>
</table>

        </div>

    </div>
        
        
    </div>
</body>

</html>