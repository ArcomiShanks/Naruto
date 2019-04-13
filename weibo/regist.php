<meta charset='utf8'>
<?php

include './mysql.php';
$a= new mysql();
$conn=$a->db_connet();
if (empty($_POST))
{
    include './regist.html';
}
else
{
    $userName=$_POST['userName'];
    $password=$_POST['password'];
    $password2=$_POST['password2'];
    $individual=$_POST['individual'];
    $phone=$_POST['phone'];
    if(empty($userName))
    {
        header("location:./false.html");
    }
    if (empty($password))
    {
        header("location:./false.html");
    }
    if (empty($password2))
    {
        header("location:./false.html");
    }
    if (empty($individual))
    {
        header("location:./false.html");
    }
    if (empty($phone))
    {
        header("location:./false.html");
    }
    else
    {
        if($password!=$password2)
        {
            echo '密码不一致，请返回！';
        }
        else
        {
            $result=$a->user_zhuce($userName,$password,$phone,$individual);
            if($result)
            {
                echo "<script> alert('注册成功！');parent.location.href='./login.php'; </script>";
            }
        }
    }

}



?>