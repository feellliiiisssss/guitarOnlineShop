<?php
function registrasi($data) 
{
    global $conn;

    $firstname = $data['firstname'];
    $lastname = $data['lastname'];
    $email = $data['email'];
    $password = mysqli_real_escape_string($conn, $data['password']);
    $confirmpass = mysqli_real_escape_string($conn, $data['confirmpass']);

    //check if email has been used or not
    $result = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");
    if (mysqli_fetch_assoc($result))
    {
        echo "<script>
        alert('Email sudah digunakan!');
      </script>";
    }


    // Confirm Password Check
    if ($password !== $confirmpass)
    {
        echo "<script>
                alert('Konfirmasi Password tidak sesuai!');
              </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);
    

    //adding new user to the database
    mysqli_query($conn, "INSERT INTO users VALUES('', '$firstname', '$lastname', '$email', '$password')");
    return mysqli_affected_rows($conn);
    
}