
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>display</title>
    <?php include "link.php" ?>
</head>
<body>
    <div class = "main-div">
        <h2>List of Candidates for  webdeveloper job</h2>

        <div class = "center-div">
            <div class ="table-responsive">
                <table>
            <thead>
                <tr>
                <th>id</th>
                <th>name</th>
                <th>degree</th>
                <th>mobile</th>
                <th>email</th>
                <th>refer</th>
                <th>post</th>
                <th colspan="2">operation</th>
                </tr>
</thead>
<tbody>
<?php
include "connection.php";
$selectquery = "select *from JobRegstration";
$query = mysqli_query($con,$selectquery);
while($res=mysqli_fetch_array($query)){
?>
    <tr>
    <td><?php echo $res["id"];?></td>
    <td><?php echo $res["name"];?></td>
    <td><?php echo $res["degree"];?></td>
    <td><?php echo $res["mobile"];?></td>
    <td><?php echo $res["email"];?></td>
    <td><?php echo $res["refer"];?></td>
    <td><?php echo $res["jobpost"];?></td>
    <td><a href="update.php?id=<?php echo $res["id"];?>" data-toggle="tooltip" data-placement="bottom" title="UPDATE!"><i class="fa-solid fa-pen-to-square"></i></a></td>
    <td> <a href="delete.php?id=<?php echo $res["id"];?>" data-toggle="tooltip" data-placement="bottom" title="DELETE!"><i class="fa-solid fa-trash"></i></a></td>

<tr>
    <?php
}
?>


</tbody>
</table>
</div>

</div>
</div>

</body>

</html>