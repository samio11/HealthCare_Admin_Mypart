<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/update_doctor.css">
    <title>Add Doctor</title>
</head>
<?php
include './add_doctor_database.php';
?>

<body>
    <div>
        <form method="POST" action="" onsubmit="return validateDoctorAdd()">
            <p>Name</p>
            <input type="text" name="name" id="name1" required>
            <br>

            <p>Email</p>
            <input type="email" name="email" id="email1">
            <br>

            <p>Password</p>
            <input type="password" name="password" id="password1"> <br>

            <p>Appointment Time</p>
            <input type="text" name="apointment_time" id="appoin">
            <br>

            <p>Phone Number</p>
            <input type="text" name="phone" id="phone1">
            <br>

            <p>Gender</p>
            <input type="text" name="gender" id="gender1">
            <br>

            <div class="center">
                <input type="submit" class="common_btn" value="Add Doctor" name="submit">
            </div>
        </form>

        <div class="center">
            <a class="common_btn" href="../view/admin_dashboard.php">Back Home</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        function validateDoctorAdd() {
            var fullname = document.getElementById('name1').value;
            var email = document.getElementById('email1').value;
            var password = document.getElementById('password1').value;
            var appointment = document.getElementById('appoin').value;
            var phone = document.getElementById('phone1').value;
            var gender = document.getElementById('gender1').value;

            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            var phoneRegex = /^(\+880)?\s?1[1-9]\d{8}$/;
            var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

            if (fullname.trim() === '') {
                showError("Please enter a valid full name");
                return false;
            }

            if (!emailRegex.test(email)) {
                showError("Please enter a valid email address");
                return false;
            }

            if (!passwordRegex.test(password)) {
                showError("Please enter a valid password (at least 8 characters long with uppercase, lowercase, number, and special character)");
                return false;
            }

            if (appointment.trim() === '') {
                showError("Please enter a valid Appointment Date");
                return false;
            }

            if (!phoneRegex.test(phone)) {
                showError("Please enter a valid phone number");
                return false;
            }

            if (gender.trim() === '') {
                showError("Please enter your gender");
                return false;
            }

            return true;
        }

        function showError(message) {
            Swal.fire({
                position: "top-end",
                icon: "error",
                title: message,
                showConfirmButton: false,
                timer: 1500
            });
        }
    </script>

</body>

</html>