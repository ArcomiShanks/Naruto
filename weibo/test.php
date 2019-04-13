
<meta charset='utf8'>
<?php

/**require './mysql.php';
$a= new mysql();
$a->db_connet();
$sql = "select userName from tb_user where userName='小明'";
$shuzu=array();
$shuzu =$a->db_getone($sql);
print_r($shuzu);
*/

/**if(empty($_POST))
{
    include'./login.html';
}
else
{
    $userName=$_POST['userName'];
    $password=$_POST['password'];
    echo $password;
    echo $userName;
}include './false.html';
*/


/**include './mysql.php';
$a= new mysql();
$conn=$a->db_connet();
$sql = "insert into tb_user (userName,password,phone,individual) values ('jiji','lll','sds','asaaw')";
$what =$a->db_query($sql);
echo $what;*/

/**include './mysql.php';
$a= new mysql();
$conn=$a->db_connet();
$what=$a->user_zhuce('ccc','kkk','sss','zzz');
echo $what;*/

/**
echo "<script> alert('注册成功！');parent.location.href='./login.php'; </script>";
 */
/**echo"
    <table width=\"1000px\" cellpadding=\"1\" border=\"1\"ellspacing=\"1\">
    <tr>
            <td>asdad</td>
            <td>sadadsad</td>
      </tr>";*/
/**include './sentblog.html';*/
$a='今天天气好清凉';
echo mb_strlen($a,'utf8');

?>