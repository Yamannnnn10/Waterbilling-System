<?php
include("db_conn.php");
$i = $_GET['id'];
$f = $_GET['fullname'];
$a = $_GET['address'];
$c= $_GET['cont'];
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
            <div class="navbar_nav" style="margin-right:200px">
                <div class="list_option">
                    <ul class="lists">
                        <a href="Admin.php"><img  class="logo_img" src="logo.jpg" alt="logo_image" style="width:50px;height:50px;margin-bottom: -10px;margin-right:55px;"></a>
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
                    <label for="Firstname" class="user_label">Customer ID:</label>
                    <input type="text" value="<?php echo "$i"?>" name="id" id="custname">
                </div>
                <div class="home_field">
                    <label for="Firstname" class="user_label">First Name:</label>
                    <input type="text" value="<?php echo "$f"?>" name="fullname" id="custname">
                </div>
                <div class="home_field">
                    <label for="Lastname" class="user_label">Address:</label>
                    <input type="text" value="<?php echo "$a"?>" name="address" id="custname">
                </div>
                <div class="home_field">
                    <label for="address" class="user_label">Contact number:</label>
                    <input type="text" value="<?php echo "$c"?>" name="contact" id="custname">
                </div>
                
                <div class="home_field">
                    <label for="email" class="user_label">Calculate Total:</label>
                    <input type="text" value="" name="uni" id="custname"  style="width: 40px ;height:45px;margin-right:50px;">
                    <input type="text" value="" name="ra" id="custname"  style="width: 40px ;height:45px;margin-right:50px;">
                    <input type="text" value="" name="dis" id="custname"  style="width: 40px ;height:45px;margin-right:30px;">
                    <input type="submit"  name="total" class=" btn_btn " id="add_employee" value="Calculate" ></input>
                    <?php 
                    include 'db_conn.php';
                    $mul='';
                    $unit='';
                    $rate='';
                    $discount='';
                    if(isset($_POST['total'])){
                    $unit = $_POST['uni'];
                    $rate = $_POST['ra'];
                    $discount = $_POST['dis'];
                    $mul = (int)$unit*(int)$rate-(int)$discount;
                }
                ?>
                </div>
                <div class="home_field">
                    <label for="cont_numb" class="user_label">Unit:</label>
                    <input type="text" value="<?php echo $unit ?>" name="unit" id="custname"  >
                </div>
                <div class="home_field">
                    <label for="email" class="user_label">Rate</label>
                    <input type="text" value="<?php echo $rate ?>" name="rate" id="custname" >
                </div>
                <div class="home_field">
                    <label for="email" class="user_label">Discount</label>
                    <input type="text" value="<?php echo $discount ?>" name="discount" id="custname" >  
                </div>
                <br>
                <div class="home_field">
                <label for="email" class="user_label">Total</label>
                <input type="text"  name="total" value="<?php echo $mul ?>" id="custname"  style="width:240px;">
                </div>

                <div class="home_button" id="customer_btn">
                    <input type="submit"  name="submit" class=" btn_btn " id="add_employee" value="Add bill" ></input>
                    
                </div>
            </div>
        </form>
    </div>
</body>

</html>


<?php
include 'db_conn.php';

if(isset($_POST['submit'])){
    $idu = $_POST['id'];
    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $cont = $_POST['contact'];
    $un = $_POST['unit'];
    $ra = $_POST['rate'];
    $dis = $_POST['discount'];
    $tot = $_POST['total'];

    $query = "insert into bill(cid,fullname,address,contact,unit,rate,discount,total)
                   values($idu,'$fullname','$address','$cont',$un,$ra,$dis,$tot)";
    $run = mysqli_query($con,$query);

    if($run){
        ?>
        <script>
            alert("Bill insterted sucessully");
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