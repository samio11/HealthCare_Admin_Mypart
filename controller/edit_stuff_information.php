<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/update_doctor.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> 
    <title>Update Stuff</title>
</head>
<?php
include '../model/adminConnection.php';
$id = $_REQUEST['id'];
if(isset($_REQUEST['submit']))
{
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $gender = $_REQUEST['gender'];
    $phone = $_REQUEST['phone'];
    $working = $_REQUEST['working_hour'];
   
    $mydb = new model();
    $conobj= $mydb->OpenConn();
    $result = $mydb->updateStuffInfo($conobj,"medical_stuff",$id,$name,$email,$password,$gender,$phone,$working);
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
    $rows = mysqli_fetch_assoc(mysqli_query($conobj,"SELECT * FROM medical_stuff WHERE id = $id"))
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
            <p>Gender</p>
            <input type="text" name="gender" id="phone1" value="<?php echo $rows['gender']  ?>">
            <br>

            <p>Phone Number</p>
            <input type="text" name="phone" id="phone1" value="<?php echo $rows['phone']  ?>">
            <br>
           
            <p>Working Hour</p>
            <input type="text" name="working_hour" id="phone1" value="<?php echo $rows['working_hour']  ?>">
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
            title: "Stuff Updated Successfully",
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
            title: "Stuff Update Failed",
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
