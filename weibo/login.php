<meta charset='utf8'>
<?php
include './mysql.php';
$a=new mysql();
$conn= $a->db_connet();
if(empty($_POST))
{
    include'./login.html';
}
else
{
    $userName=$_POST['userName'];
    $password=$_POST['password'];
    if(empty($userName))
    {
        echo '用户名或密码不能为空';
    }
    if (empty($password))
    {
        echo '用户名或密码不能为空';
    }
    $sql = "select userName,password from tb_user where userName='$userName' and password='$password'";
    $result=mysqli_query($conn,$sql);
    $rose=mysqli_fetch_assoc($result);
    if ($rose)
    {
        setcookie('userName',$userName);
        header("location:./home.php");
    }
    else
    {
        header("location:./false.html");
    }
}

?>