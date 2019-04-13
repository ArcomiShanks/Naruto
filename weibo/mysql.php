<meta charset="utf8">
<?php
/**
 * 本MySQL代码为数据库用
 *
 * @retuen resourse;
 */

class mysql
{
    public function db_connet()
    {
        $conn = mysqli_connect('localhost','root','cdnxybforever','weibo');
        mysqli_query($conn,'set names utf8');
        return $conn;
    }

    /**
     * @param $sql
     * @return bool|mysqli_result
     * 连接数据库，返回$conn
     */
    public function db_query($sql)
    {
        return mysqli_query($this->db_connet(),$sql);
    }

    /**
     * @param $sql
     * @return array|null
     * 对sql语句进行操作，并返回结果
     */

    public function db_getAll($sql)
    {
        $jieguoji = $this->db_query($sql);
        $shuzu = array();
        while ($row=mysqli_fetch_assoc($jieguoji))
        {
            $shuzu[]=$row;
        }
        return $shuzu;
    }
    /**
     * 对查询结果返回一个二维数组
     */

    public function db_getone($sql)
    {
        $jieguoji2 = $this->db_query($sql);
        $shuzu2 = array();
        if ($row2=mysqli_fetch_assoc($jieguoji2))
        {
            $row2=mysqli_fetch_assoc($jieguoji2);
            $shuzu2 = $row2;
            if (count($shuzu2) == 1)
            {
                return $shuzu2;
            }
        }
    }
    /**
     * sql语句只查询一行的结果
     * 返回一个二维数组的第一个单元的一行
     */




    public function user_zhuce($userName,$password,$phone,$individual)
    {
        $sql = "insert into tb_user (`userName`,`password`,`phone`,`individual`) values ('$userName','$password','$phone','$individual')";
        $jieguoji4= $this->db_query($sql);
        return $jieguoji4;

    }
    /**
     * 注册微博的插入语句，值分别为昵称，密码，手机。
     */



}





?>