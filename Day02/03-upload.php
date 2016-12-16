<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2016/12/9 0009
 * Time: 15:45
 */

$file = $_FILES['file'];
echo '<pre>';
echo var_dump($file);
echo '</pre>'

?>
<meta charset="utf-8">
<form action="03-upload.php" method="post" enctype="multipart/form-data">

    <input type="file" name="file">
    <input type="submit" value="submit">

</form>
