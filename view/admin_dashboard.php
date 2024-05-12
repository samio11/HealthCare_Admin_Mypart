<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/admin_dashbord.css">
    <title>Admin DashBoard</title>
</head>

<body>
    <?php
    include '../model/adminConnection.php';
    session_start();

    $mydb = new model();
    $conobj = $mydb->OpenConn();

    if ($_SESSION['email']) {
        $email = $_SESSION['email'];
        $sql = "SELECT * FROM admin WHERE email = '$email'";
        $result = mysqli_query($conobj, $sql);
        $row = mysqli_fetch_assoc($result);
        echo '<div class="center">';
        echo '<div class="card">';
        echo '<div class="card__img"><svg xmlns="http://www.w3.org/2000/svg" width="100%"><rect fill="#ffffff" width="540" height="450"></rect><defs><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="0" x2="0" y1="0" y2="100%" gradientTransform="rotate(222,648,379)"><stop offset="0" stop-color="#ffffff"></stop><stop offset="1" stop-color="#FC726E"></stop></linearGradient><pattern patternUnits="userSpaceOnUse" id="b" width="300" height="250" x="0" y="0" viewBox="0 0 1080 900"><g fill-opacity="0.5"><polygon fill="#444" points="90 150 0 300 180 300"></polygon><polygon points="90 150 180 0 0 0"></polygon><polygon fill="#AAA" points="270 150 360 0 180 0"></polygon><polygon fill="#DDD" points="450 150 360 300 540 300"></polygon><polygon fill="#999" points="450 150 540 0 360 0"></polygon><polygon points="630 150 540 300 720 300"></polygon><polygon fill="#DDD" points="630 150 720 0 540 0"></polygon><polygon fill="#444" points="810 150 720 300 900 300"></polygon><polygon fill="#FFF" points="810 150 900 0 720 0"></polygon><polygon fill="#DDD" points="990 150 900 300 1080 300"></polygon><polygon fill="#444" points="990 150 1080 0 900 0"></polygon><polygon fill="#DDD" points="90 450 0 600 180 600"></polygon><polygon points="90 450 180 300 0 300"></polygon><polygon fill="#666" points="270 450 180 600 360 600"></polygon><polygon fill="#AAA" points="270 450 360 300 180 300"></polygon><polygon fill="#DDD" points="450 450 360 600 540 600"></polygon><polygon fill="#999" points="450 450 540 300 360 300"></polygon><polygon fill="#999" points="630 450 540 600 720 600"></polygon><polygon fill="#FFF" points="630 450 720 300 540 300"></polygon><polygon points="810 450 720 600 900 600"></polygon><polygon fill="#DDD" points="810 450 900 300 720 300"></polygon><polygon fill="#AAA" points="990 450 900 600 1080 600"></polygon><polygon fill="#444" points="990 450 1080 300 900 300"></polygon><polygon fill="#222" points="90 750 0 900 180 900"></polygon><polygon points="270 750 180 900 360 900"></polygon><polygon fill="#DDD" points="270 750 360 600 180 600"></polygon><polygon points="450 750 540 600 360 600"></polygon><polygon points="630 750 540 900 720 900"></polygon><polygon fill="#444" points="630 750 720 600 540 600"></polygon><polygon fill="#AAA" points="810 750 720 900 900 900"></polygon><polygon fill="#666" points="810 750 900 600 720 600"></polygon><polygon fill="#999" points="990 750 900 900 1080 900"></polygon><polygon fill="#999" points="180 0 90 150 270 150"></polygon><polygon fill="#444" points="360 0 270 150 450 150"></polygon><polygon fill="#FFF" points="540 0 450 150 630 150"></polygon><polygon points="900 0 810 150 990 150"></polygon><polygon fill="#222" points="0 300 -90 450 90 450"></polygon><polygon fill="#FFF" points="0 300 90 150 -90 150"></polygon><polygon fill="#FFF" points="180 300 90 450 270 450"></polygon><polygon fill="#666" points="180 300 270 150 90 150"></polygon><polygon fill="#222" points="360 300 270 450 450 450"></polygon><polygon fill="#FFF" points="360 300 450 150 270 150"></polygon><polygon fill="#444" points="540 300 450 450 630 450"></polygon><polygon fill="#222" points="540 300 630 150 450 150"></polygon><polygon fill="#AAA" points="720 300 630 450 810 450"></polygon><polygon fill="#666" points="720 300 810 150 630 150"></polygon><polygon fill="#FFF" points="900 300 810 450 990 450"></polygon><polygon fill="#999" points="900 300 990 150 810 150"></polygon><polygon points="0 600 -90 750 90 750"></polygon><polygon fill="#666" points="0 600 90 450 -90 450"></polygon><polygon fill="#AAA" points="180 600 90 750 270 750"></polygon><polygon fill="#444" points="180 600 270 450 90 450"></polygon><polygon fill="#444" points="360 600 270 750 450 750"></polygon><polygon fill="#999" points="360 600 450 450 270 450"></polygon><polygon fill="#666" points="540 600 630 450 450 450"></polygon><polygon fill="#222" points="720 600 630 750 810 750"></polygon><polygon fill="#FFF" points="900 600 810 750 990 750"></polygon><polygon fill="#222" points="900 600 990 450 810 450"></polygon><polygon fill="#DDD" points="0 900 90 750 -90 750"></polygon><polygon fill="#444" points="180 900 270 750 90 750"></polygon><polygon fill="#FFF" points="360 900 450 750 270 750"></polygon><polygon fill="#AAA" points="540 900 630 750 450 750"></polygon><polygon fill="#FFF" points="720 900 810 750 630 750"></polygon><polygon fill="#222" points="900 900 990 750 810 750"></polygon><polygon fill="#222" points="1080 300 990 450 1170 450"></polygon><polygon fill="#FFF" points="1080 300 1170 150 990 150"></polygon><polygon points="1080 600 990 750 1170 750"></polygon><polygon fill="#666" points="1080 600 1170 450 990 450"></polygon><polygon fill="#DDD" points="1080 900 1170 750 990 750"></polygon></g></pattern></defs><rect x="0" y="0" fill="url(#a)" width="100%" height="100%"></rect><rect x="0" y="0" fill="url(#b)" width="100%" height="100%"></rect></svg></div>';
        echo '<div class="card__avatar"><img class="img1" src="picture/' . $row['picture'] . '" alt="image"></div>';
        echo '<div class="card__title">' . $row['name'] . '</div>';
        echo '<div class="card__subtitle">ADMIN</div>';
        echo '<div class="card__wrapper">';
        echo '<button onclick="logOut()" class="card__btn">Log Out</button>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    } else {
        header('location: ./admin_login.php');
    }
    ?>
    <!-- Chatagory Section -->
    <div class="cards1">
        <div class="card1 red">
            <p class="tip">TOTAL DOCTOR</p>
            <?php
            $mydb = new Model();
            $conObj = $mydb->OpenConn();
            $result = $mydb->showInfo($conObj, "doctor");
            $showDoctor = $result->num_rows;
            echo '<p id="s1" class="second-text">' . $showDoctor . '</p>';
            ?>
        </div>
        <div class="card1 blue">
            <p class="tip">Total Medical Assistance</p>
            <?php
            $mydb = new Model();
            $conObj = $mydb->OpenConn();
            $result = $mydb->showInfo($conObj, "medical_stuff");
            $showStuff = $result->num_rows;
            echo '<p id="s2" class="second-text">' . $showStuff . '</p>';
            ?>
        </div>
        <div class="card1 green">
            <p class="tip">Total Patient</p>
            <?php
            $mydb = new Model();
            $conObj = $mydb->OpenConn();
            $result = $mydb->showInfo($conObj, "patient");
            $showStuff = $result->num_rows;
            echo '<p id="s3" class="second-text">' . $showStuff . '</p>';
            ?>
        </div>
    </div>

    <!-- chart Section -->
    <div class="shorten">
        <canvas id="myChart"></canvas>
    </div>

    <!-- Doctor Section -->
    <br>
    <br>
    <h3 class="text_center" id="parent_element">Doctor Information</h3>
    <table id="child_element">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Doctor Available Time</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $mydb1 = new model();
            $connobj = $mydb1->openConn();
            $result = $mydb1->showDoctors($connobj, "doctor");
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $email = $row['email'];
                    $password = $row['password'];
                    $time = $row['apointment_time'];
                    $phone = $row['phone'];
                    $gender = $row['gender'];
                    echo
                    '<tr>
                    <td>' . $id . '</td>
              <td>' . $name . '</td>
              <td>' . $email . '</td>
              <td>' . $password . '</td>
              <td>' . $time . '</td>
              <td>' . $phone . '</td>
              <td>' . $gender . '</td>
              <td><a class= "edit_btn" href="../controller/edit_doctor_information.php?id=' . $id . '">Edit</a></td>
              <td><a class = "delete_btn" href="../controller/delete_selected_doctor.php?id=' . $id . '">Delete</a></td>
            </tr>';
                }
            }

            ?>
        </tbody>
    </table>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('myChart');
        let doctor = parseInt(document.getElementById('s1').innerText);
        let stuff = parseInt(document.getElementById('s2').innerText);
        let patient = parseInt(document.getElementById('s3').innerText);

        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: [
                    'Doctor',
                    'Medical Stuffs',
                    'Patient'
                ],
                datasets: [{
                    label: 'All User In SYSTEM',
                    data: [doctor, stuff, patient],
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)'
                    ],
                    hoverOffset: 4
                }]
            }
        });
    </script>

    <script>
        function logOut() {
            window.location.href = "../controller/admin_logout.php";
        }
    </script>
</body>

</html>