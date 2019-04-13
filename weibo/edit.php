<?php

include './mysql.php';
$a= new mysql();
$conn=$a->db_connet();
if(isset($_COOKIE['userName']))
{
    $userName=$_COOKIE['userName'];
    if(empty($_POST))
    {
        include'./edit.html';
        $sql="select phone,individual from tb_user where userName='$userName'";
        $results=$a->db_getAll($sql);
        echo"<tr>
                <td>{$results[0]['phone']}</td>
                <td>{$results[0]['individual']}</td>
            </tr>";
    }
    else
    {
        if((empty($_POST['phone']))or(empty($_POST['individual'])))
        {
            header("location:./false.html");
        }
        else
        {
            $phone=$_POST['phone'];
            $individual=$_POST['individual'];
            $sql="update tb_user set phone='$phone',individual='$individual' where userName='$userName'";
            $result=$a->db_query($sql);
            if($result)
            {
                echo "<script> alert('修改成功！');parent.location.href='./home.php'; </script>";
            }
            else
            {
                header("location:./false.html");
            }
        }
    }

}
else
{
    include'./false.html';
}
?>