<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/update_doctor.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> 
    <title>Update Doctor</title>
</head>
<?php
include '../model/adminConnection.php';
$id = $_REQUEST['id'];
if(isset($_REQUEST['submit']))
{
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $appointment = $_REQUEST['apointment_time'];
    $phone = $_REQUEST['phone'];
    $gender = $_REQUEST['gender'];
   
    $mydb = new model();
    $conobj= $mydb->OpenConn();
    $result = $mydb->updateDoctorInfo($conobj,"doctor",$id,$name,$email,$password,$appointment,$phone,$gender);
    if($result){
        echo '<script>window.onload = function() { updateOne(); }</script>';
    }
    else{
        echo '<script>window.onload = function() { updateFail(); }</script>';
    }
}

?>

<body>
    <?php
     $mydb = new model();
     $conobj= $mydb->OpenConn();
    $id = $_REQUEST['id'];
    $rows = mysqli_fetch_assoc(mysqli_query($conobj,"SELECT * FROM doctor WHERE id = $id"))
     ?>

    <div>
        <form method="POST" action="">
            <p>Name</p>
            <input type="text" name="name" id="name1" value="<?php echo $rows['name']  ?>" required>
            <br>
            
            <p>Email</p>
            <input type="email" name="email" id="email1" value="<?php echo $rows['email']  ?>">
            <br>
           
            <p>Password</p>
            <input type="password" name="password" id="password1" value="<?php echo $rows['password']  ?>"> <br>
            <p>Appointment Time</p>
            <input type="text" name="apointment_time" id="phone1" value="<?php echo $rows['apointment_time']  ?>">
            <br>

            <p>Phone Number</p>
            <input type="text" name="phone" id="phone1" value="<?php echo $rows['phone']  ?>">
            <br>
           
            <p>Gender</p>
            <input type="text" name="gender" id="phone1" value="<?php echo $rows['gender']  ?>">
            <br>
           
           
           
            <div class="center">
                <input type="submit" class="common_btn" value="Update" name="submit">
            </div>
        </form>

        <div class="center">
            <a class="common_btn" href="../view/admin_dashboard.php">Back Home</a>
        </div>

    </div>

   <script>
    function updateOne() {
          
        Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Doctor Updated Successfully",
            showConfirmButton: false,
            timer: 1500
        });

        setTimeout(function() {
            window.location.href = "../view/admin_dashboard.php";
        }, 1500);
    }

    function updateFail() {
          
        Swal.fire({
            position: "top-end",
            icon: "error",
            title: "Doctor Update Failed",
            showConfirmButton: false,
            timer: 1500
        });
        setTimeout(function() {
            window.location.href = "../view/admin_dashboard.php";
        }, 1500);

    }
   </script>
</body>
    

</html>
