<meta charset='utf8'>
<?php

if(empty($_COOKIE['userName']))
{
    header("location:./false.html");
}
else
{
    include'./home.html';
    include './mysql.php';
    $a= new mysql();
    $conn=$a->db_connet();
    $userName=$_COOKIE['userName'];
    $sql="select title,text,blogType,good_num from tb_blog where author='$userName'";
    $rose=$a->db_getAll($sql);
    $check=0;
    while($check<=count($rose)-1)
    {
        $mjk=$rose[$check]['title'];
        echo"
        <table width=\"1000px\" cellpadding=\"1\" border=\"1\"ellspacing=\"1\">
         <tr>
            <td>标题：{$rose[$check]['title']}</td>
            <td>正文：{$rose[$check]['text']}</td>
            <td>类型：{$rose[$check]['blogType']}</td>
            <td>点赞数：{$rose[$check]['good_num']}</td>
            <td>
                <a href='./delete.php?title=$mjk'>删除</a>
            </td>
        </tr>";
        $check=$check+1;
    }
}


?>