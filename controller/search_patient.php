<?php
include("../model/adminConnection.php");

$username = $_GET['username'];


$mydb = new Model();
$conobj = $mydb->OpenConn();
$result = $mydb->showInfo1($conobj, "patient", $username);
if ($result->num_rows > 0) {
    foreach ($result as $row) {
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $password = $row['password'];
        $phone = $row['phone'];
        $address = $row['address'];
        $blood_group = $row['blood_group'];
        $gender = $row['gender'];
        echo
        '<tr>
    <td>' . $id . '</td>
<td>' . $name . '</td>
<td>' . $email . '</td>
<td>' . $password . '</td>
<td>' . $phone . '</td>
<td>' . $address . '</td>
<td>' . $blood_group . '</td>
<td>' . $gender . '</td>
</tr>';
    }
} else {
    echo "no user found";
}
