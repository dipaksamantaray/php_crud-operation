<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>updated</title>
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

            <form action="" method="POST">
                <div class="row register-form">





                <?php
            include "connection.php";

            $id = $_GET['id'];

            $showquery = "select * from JobRegstration where id = {$id}";
            $showdata = mysqli_query($con,$showquery);
            $arrdata = mysqli_fetch_array($showdata);




            if(isset($_POST["submit"])){

                $idupdate = $_GET['id'];

                $name = $_POST["name"];
                $degree = $_POST["degree"];
                $mobile =$_POST["mobile"];
                $email = $_POST["email"];
                $ref = $_POST["ref"];
                $jobprofile = $_POST["jobprofile"];


                // $insert ="insert into JobRegstration(name, degree, mobile, email, refer, jobpost)values('$name','$degree','$mobile','$email','$ref','$jobprofile')";
                

                $query = "update JobRegstration set id=$id,name = '$name',degree = '$degree',mobile='$mobile',email='$email',refer='$ref',jobpost='$jobprofile'where id =$idupdate";



                $res = mysqli_query($con,$query);
                if($res){
                    ?>
                    <script>
            alert("data updated sucessful");

            </script>
                    <?php
                    
                }else{
                    ?>
                    <script>
            alert("data not updated");

            </script>
                    <?php
                }
            }
            ?>





                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="enter your name *" name="name" value="<?php echo $arrdata["name"];?>" required/>
</div>

<div class="form-group">
<input type="tel" class="form-control" placeholder="enter your mobile number *" name="mobile" value="<?php echo $arrdata["mobile"];?>" required/>
</div>


    <div class="form-group">
    <input type="text" class="form-control" placeholder="Any references*" name="ref" value="<?php echo $arrdata["refer"];?>" required/>
    </div>



</div>


<div class="col-md-6">
    <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter your qualification*" name="degree" value="<?php echo $arrdata["degree"];?>" required/>

</div>

<div class="form-group">
    <input type="email" class="form-control" placeholder="Enter your valid email*" name="email" value="<?php echo $arrdata["email"];?>" required/>

</div>

<div class="form-group">
    <input type="text" class="form-control" placeholder="jobprofile*" name="jobprofile" value="<?php echo $arrdata["jobpost"];?>" required/>

</div>
<input type ="submit" class="btnRegister" name ="submit" value ="updated"/>

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


