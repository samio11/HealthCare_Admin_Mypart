<?php

class model
{


    function openConn()
    {
        $conn = new mysqli("localhost", "root", "", "health_care");
        return $conn;
    }

    function admin_registration($conn, $table, $name, $email, $password, $phone, $picture ,$address)
    {
        $sql = "INSERT INTO $table (name,email,password,phone,picture,address) VALUES ('$name','$email','$password','$phone','$picture','$address')";
        $result = $conn->query($sql);
        return $result;
    }
     function showInfo($conn,$table)
    {
        $sql = "SELECT * FROM $table";
        $result = $conn->query($sql);
        return $result;
    }
    function showDoctors($conn,$table)
    {
        $sql = "SELECT * FROM $table";
        $result = $conn->query($sql);
        return $result;
    }
    function deleteDoctor($conn,$table,$id)
    {
        $sql = "DELETE FROM $table WHERE id=$id";
        $result = $conn->query($sql);
        return $result;
    }
    function updateDoctorInfo($conn,$table,$id,$name,$email,$password,$apoinment_time,$phone,$gender)
    {
        $sql = "UPDATE $table SET name='$name',email='$email',password='$password',apointment_time='$apoinment_time',phone='$phone',gender='$gender' WHERE id=$id";
        $result = $conn->query($sql);
        return $result;
    }
    function showSpecificDoctor($conn,$table,$id)
    {
        $sql = "SELECT * FROM $table WHERE id=$id";
        $result = $conn->query($sql);
        return $result;
    }
}
?>