<?php

$server ="localhost";
$user = "root";
$pass = "";
$db ="crudoperation";

$con = mysqli_connect($server,$user,$pass,$db);


if($con){
?>
<script>

alert("connectes sucessful");
</script>

<?php

}else{
    ?>
    <script>
    
    alert("not connected");
    </script>
    
    <?php
       
}

?>