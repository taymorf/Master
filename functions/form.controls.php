<?php

// START - Edit only this section for new projects.
$first_name = $_POST['firstName'];
$last_name = $_POST['lastName'];
$username = $_POST['username'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$emailunchecked = $_POST['email'];
$fk_type = $_POST['fk_type'];

// END - SECTION
// START - 
$first_name = Edit_user_input($first_name);
$last_name = Edit_user_input($last_name);
$username = Edit_user_input($username);
$password1 = Edit_user_input($password1);
$password2 = Edit_user_input($password2);
$emailunchecked = Edit_user_input($emailunchecked);

// END - SECTION
// START - DATA PREP
function Edit_user_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

;

// END - SECTION
// START - DUPLICATE EMAIL ENTRY CHECK

$email = $emailunchecked;
// END - SECTION
// START - 



// END - SECTION
// START - PASSWORD VALIDATION SECTION

if ($password1 != "") {

    if ($password1 === $password2) {
        $tempPassword = $password1;
        $userPassword = password_hash($tempPassword, PASSWORD_DEFAULT);
        $conn = connect();
        $sql = "INSERT INTO `users`(`username`, `userPassword`, `firstName`, `lastName`, `email`, `fk_type`) VALUES ('$username','$userPassword','$first_name','$last_name','$email','$fk_type')";
        if (mysqli_query($conn, $sql)) {
            echo "Records added successfully.";
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
        return true;
    } else {
        echo 'DOESN`T MACTH!!!';
        return false;
    }
} 

// END - SECTION
?>