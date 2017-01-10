<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2017/1/10 0010
 * Time: 11:33
 */

include "conn.php";

if (isset($_POST['sub'])) {
    $title = $_POST['title'];
    $cid = $_POST['catalog'];
    $con = $_POST['con'];

    $sql = "insert into blog(wid,title,content,time,cid) VALUES(NULL ,'$title','$con',now(),'$cid')";
    $query = mysqli_query($link, $sql);

    if ($query){
        header('location:index.php');
    }else{
        echo "<script>alert('发表失败！')</script>";
        echo "<script>window.location.href='add.php'</script>";
    }

}

?>

<meta charset="UTF-8">

<form action="add.php" method="post">

    标题：<input type="text" name="title">

    <select name="catalog" id="">

        <?php

        $sql = "select * from CATALOG ";

        $query = mysqli_query($link, $sql);

        while ($rs = mysqli_fetch_array($query)) {


            ?>

            <option value="<?php echo $rs['cid'] ?>">

                <?php
                    echo $rs['cname']
                ?>

            </option>

            <?php

        }

        ?>

    </select>

    <br><br>

    内容：<textarea name="con" cols="30" rows="10"></textarea>
    <input type="submit" name="sub" value="添加">

</form>

