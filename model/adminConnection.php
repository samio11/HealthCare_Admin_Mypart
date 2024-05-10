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

}
?>