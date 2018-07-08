<?php

$firstname=$surname=$email=$birthday=$gender="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname= $_POST["firstname"];
    $surname= $_POST["surname"];
    $email= $_POST["email"];
    $birthday= $_POST["birthday"];
    $gender= $_POST["gender"];

    include 'verify.php';
    $validation = new Validate();
    $valid = $validation->verify($firstname,$surname,$email,$birthday,$gender);
    if($valid){
        $firstname=test_input($firstname);
        $surname=test_input($surname);
        $email=test_input($email);
        $birthday=test_input($birthday);
        $gender=test_input($gender);
        
        include 'savedata.php';
        $data = new JSONdata();
        $data->storeData($firstname,$surname,$email,$birthday,$gender);
        echo "Mscript>alert('Data Saved !')</script>";
        header('Location: form.php');
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>