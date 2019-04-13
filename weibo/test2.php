<meta charset='utf8'>
<?php
require './mysql.php';
$a= new mysql();
$x=$a->db_connet();
$b='小二';
$c='2333';
$sql = "select userName,password from tb_user where userName='$b' and password='$c'";
$conn=mysqli_query($x,$sql);
$quit=mysqli_fetch_assoc($conn);

if($quit)
{
    header("location:./home.html");
}
else
{
    header("location:./false.html");
}
?>