<?php
session_start();
include "../connection.php";
if(!isset($_SESSION["admin"]))
{
    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php
}
$id=$_GET["id"];
mysqli_query($link,"DELETE FROM exam_category WHERE  id='$id'");
?>
<script type="text/javascript">
    window.location="exam_category.php";


</script>