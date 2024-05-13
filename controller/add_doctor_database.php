<?php
include '../model/adminConnection.php';

if (isset($_POST['submit'])) {
    $mydb = new model();
    $conobj = $mydb->OpenConn();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $appointment = $_POST['apointment_time'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];

    $result = $mydb->doctor_add($conobj, 'doctor', $name, $email, $password, $appointment, $phone, $gender);

    if ($result) {
        echo '<script>window.onload = function() { sucessMessage(); }</script>';
    } else {
        echo '<script>alert("Registration failed.");</script>';
    }
}
?>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        function sucessMessage() {
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