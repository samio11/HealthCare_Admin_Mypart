<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include '../model/adminConnection.php';

if (isset($_POST['submit'])) {
    $mydb = new model();
    $conobj = $mydb->OpenConn();

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $profile_picture = $_FILES['profile_pic']['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $result = $mydb->admin_registration($conobj, "admin", $name, $email, $password, $profile_picture, $phone, $address);

    if ($result) {
        $target_directory = "picture/";
        $target_file = $target_directory . basename($_FILES["profile_pic"]["name"]);
        move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_file);
        echo '<script>window.onload = function() { sucessMessage(); }</script>';
    } else {
        echo '<script>alert("Registration failed.");</script>';
    }
}
?>
<script>
   function sucessMessage()
   {
    Swal.fire({
  position: "top-end",
  icon: "success",
  title: "Admin Has been Added Succesfully",
  showConfirmButton: false,
  timer: 1500
});
   }
</script>