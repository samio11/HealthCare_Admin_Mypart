<?php
require_once '../model/adminConnection.php'; 

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];

 
    $mydb = new model();
    $connobj = $mydb->openConn();

    // Attempt to delete doctor record
    $result = $mydb->deleteDoctor($connobj, "doctor", $id);

    if ($result) {
       
        echo '<script>window.onload = function() { deleteDone(); }</script>';
    } else {
      
        die(mysqli_error($connobj)); 
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Doctor</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> 
</head>
<body>

<script>
    function deleteDone() {
       
        Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Doctor Deleted Successfully",
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
