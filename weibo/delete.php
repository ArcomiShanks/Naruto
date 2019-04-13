<meta charset='utf8'>
<?php

include './mysql.php';
$a=new mysql();
$conn= $a->db_connet();
$title=$_GET['title'];
$sql="delete from tb_blog where title='$title'";
$a->db_query($sql);
echo "删除成功，请返回刷新！";




?>