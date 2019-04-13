<meta charset='utf8'>
<?php

include './mysql.php';
$a=new mysql();
$conn= $a->db_connet();
if(empty($_POST))
{
    include'sentblog.html';
}
else
{
    if(empty($_POST['title']))
    {
        header("location:./false.html");
    }
    if(empty($_POST['text']))
    {
        header("location:./false.html");
    }
    else
    {
        $title=$_POST['title'];
        $text=$_POST['text'];
        $blogType=$_POST['blogType'];
        if(mb_strlen($text,'utf8')>200)
        {
            header("location:./false.html");
        }
        else
        {
            $userName=$_COOKIE['userName'];
            $sql="insert into tb_blog (title,text,author,blogType) values ('$title','$text','$userName','$blogType')";
            $result=$a->db_query($sql);
            if($result)
            {
                echo "<script> alert('成功！');parent.location.href='./home.php'; </script>";
            }
        }
    }

}



?>