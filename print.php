<?php
include 'db_conn.php';
$selectquery1 = "select * from detail";
$query1 = mysqli_query($con,$selectquery1);
$html='<table>
<tr>
<td>ID</td>
<td>Full name</td>
<td>Address</td>
<td>Contact</td>
<td>Email</td>
<td>Password</td>
</tr>';
while($res = mysqli_fetch_array($query1)){
    $html.='
<tr>
<td>'.$res['id'].'</td>
<td>'.$res['fullname'].'</td>
<td>'.$res['address'].'</td>
<td>'.$res['contact'].'</td>
<td>'.$res['email'].'</td>
<td>'.$res['password'].'</td>
</tr>';

}
$html.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=Employedetail.xls');
echo $html;
?>

