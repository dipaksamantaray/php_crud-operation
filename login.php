<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>crud opertion</title>
    <?php include "link.php"?>
</head>
<body>
    <div class="container register">
        <div class = "row">
            <div class="col-md-3 register-left">
                <h3>Welcome</h3>
                <p>Please fill all the details carefuly. This form can change your life</p>
                <a href="display.php">Check form</a> </br>
</div>
<div class="col-md-9 register-right">
    <div class="tab-content" id = "myTabcontent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <h3 class="register-heading">Apply for Company placement</h3>

            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                <div class="row register-form">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="enter your name *" name="name" value="" required/>
</div>

<div class="form-group">
<input type="tel" class="form-control" placeholder="enter your mobile number *" name="mobile" value="" required/>
</div>


    <div class="form-group">
    <input type="text" class="form-control" placeholder="Any references*" name="ref" value="" required/>
    </div>



</div>


<div class="col-md-6">
    <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter your qualification*" name="degree" value="" required/>

</div>

<div class="form-group">
    <input type="email" class="form-control" placeholder="Enter your valid email*" name="email" value="" required/>

</div>

<div class="form-group">
    <input type="text" class="form-control" placeholder="jobprofile*" name="jobprofile" value="" required/>

</div>
<input type ="submit" class="btnRegister" name ="submit" value ="Register"/>

</div>

</div>

 </form>
</div> 
</div>
</div>
</div>

</div>
    
</body>
</html>


<?php
include "connection.php";
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $degree = $_POST["degree"];
    $mobile =$_POST["mobile"];
    $email = $_POST["email"];
    $ref = $_POST["ref"];
    $jobprofile = $_POST["jobprofile"];


    $insert ="insert into JobRegstration(name, degree, mobile, email, refer, jobpost)values('$name','$degree','$mobile','$email','$ref','$jobprofile')";


    $res = mysqli_query($con,$insert);
    if($res){
        ?>
        <script>
alert("data insert sucessful");

</script>
        <?php
        
    }else{
        ?>
        <script>
alert("data not inserted");

</script>
        <?php
    }
}
?>