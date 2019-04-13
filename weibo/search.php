<?php

include './mysql.php';
$a= new mysql();
$conn=$a->db_connet();
if(empty($_POST))
{
    include'./search.html';
}
else
{
    $searchName=$_POST['searchName'];
    $sql="select phone,individual from tb_user where userName='$searchName'";
    $results=$a->db_getAll($sql);
    if($results)
    {
        echo"
        <table width=\"1000px\" cellpadding=\"1\" border=\"1\"ellspacing=\"1\">
         <tr>
            <td>电话号码：{$results[0]['phone']}</td>
            <td>个人简介：{$results[0]['individual']}</td>
        </tr>";
        $sql2="select title,text,blogType,good_num from tb_blog where author='$searchName'";
        $rose=$a->db_getAll($sql2);
        $check=0;
        while($check<=count($rose)-1)
        {
            echo"
            <table width=\"1000px\" cellpadding=\"1\" border=\"1\"ellspacing=\"1\">
            <tr>
                <td>标题：{$rose[$check]['title']}</td>
                <td>正文：{$rose[$check]['text']}</td>
                <td>类型：{$rose[$check]['blogType']}</td>
                <td>点赞数：{$rose[$check]['good_num']}</td>
            </tr>";
            $check=$check+1;
        }
    }
    else
    {
        echo'找不到该用户！请返回！';
    }
}


?>