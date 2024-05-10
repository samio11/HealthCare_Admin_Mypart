<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include '../model/adminConnection.php';
$mydb = new model();
$conobj = $mydb->OpenConn();

$email = $password = $hasErr = $allErr = '';
$emailErr = $passwordErr = '';


if (isset($_REQUEST['submit'])) {

    if (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $_REQUEST["email"])) {
        $hasErr = 1;
        $emailErr = "please enter a valid email address";
    } else {
        $email = $_REQUEST['email'];
    }
    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $_REQUEST["password"])) {
        $hasErr = 1;
        $passwordErr = "please enter a valid password";
    } else {
        $password = $_REQUEST['password'];
    }

    if ($hasErr === 1) {
        echo '<script>window.onload = function() { showNotFillErr(); }</script>';
    } else {

        $result = mysqli_query($conobj, "SELECT * FROM admin WHERE email='$email' AND password='$password'");
        $data_present_row_number = mysqli_num_rows($result);
        if ($data_present_row_number == 1) {
            session_start();
            $_SESSION['email'] = $email;
            // header('location: ../view/admin_dashboard.php');
            echo '<script>window.onload = function() { loginSuccess(); }</script>';
        } else {
            echo "No Data Matching";
        }
    }
}
?>
<script>
    function showNotFillErr() {
        Swal.fire({
            position: "top-end",
            icon: "error",
            title: "Please fill all the fields",
            showConfirmButton: false,
            timer: 1500
        });
    }
    function loginSuccess() 
    {
        Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Login Success",
            showConfirmButton: false,
            timer: 1500
        });
        setTimeout(function() {
            window.location.href = "../view/admin_dashboard.php";
        }, 1500);
    }
</script>