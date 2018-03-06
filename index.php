<?php
require_once 'filemanager.php';

// Create connection
$conn = connect();
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo 'fail';
}

// Select table and columns MODUL1
//    $sql = "SELECT `id`, `type`, `level` FROM `usertype` WHERE 1";
//    $result = $conn->query($sql);
//
//    if ($result->num_rows > 0) {
//        // output data of each row
//        while ($row = $result->fetch_assoc()) {
//            echo '<div class="column"><p>' . $row["level"] . " - " . $row["type"] . "</p></div>";
//        }
//    } else {
//        echo "0 results";
//    }
//    $conn->close();
// Select table and columns
// MODUL2
?>

<html lang="en">

    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href="assets/img/favicon.ico">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>Modul</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
        <!-- Bootstrap core CSS     -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/css/paper-kit.css" rel="stylesheet"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href="assets/css/demo.css" rel="stylesheet" />

        <!--     Fonts and icons     -->
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
        <script src="assets/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery-3.2.1.js" type="text/javascript"></script>
        <script src="assets/js/jquery-ui-1.12.1.custom.min.js" type="text/javascript"></script>
        <script src="assets/js/moment.min.js" type="text/javascript"></script>
        <script src="assets/js/nouislider.js" type="text/javascript"></script>
        <script src="assets/js/paper-kit.js" type="text/javascript"></script>
        <script src="assets/js/popper.js" type="text/javascript"></script>
        <script src="assets/js/tether.min.js" type="text/javascript"></script>
        <?php
        include 'includes/nav.php';
        ?>
    </head>
    <body>
       <?php
		if(isset($_GET['page'])){
			include($_GET['page'].'.php');
		}else{
		header("Location: index.php?page=frontpage");

		}

		?>
    </body>
    <?php
    if (isset($_POST['submit'])) {

//        function confirmthepasswords($password, $rpassword) {
//            // Define post fields into simple variables
//            $first_name = $_POST['firstName'];
//            $last_name = $_POST['lastName'];
//            $email = $_POST['email'];
//            $username = $_POST['username'];
//            $password = $_POST['password'];
//            $rpassword = $_POST['rpassword'];
//            $fk_type = $_POST['usertype'];
//            $info = $_POST['info'];
//            /* Let's strip some slashes in case the user entered
//              any escaped characters. */
//            $first_name = stripslashes($first_name);
//            $last_name = stripslashes($last_name);
//            $email = stripslashes($email_address);
//            $username = stripslashes($username);
//            $password = stripslashes($password);
//            $rpassword = stripslashes($rpassword);
//            $fk_type = stripslashes($fk_type);
//            $info = stripslashes($info);
//
//            $passwordOK = "";
//
//            if ($password == $rpassword) {
//                $passwordOK = $password;
//            }
//
//            return $passwordOK;
//        }
//
//        if (isset($_POST['submit'])) {
//            $username = $_POST['username'];
//            $passwordOK = mysqli_real_escape_string($conn, $_REQUEST['userPassword']);
//            $first_name = mysqli_real_escape_string($conn, $_REQUEST['firstName']);
//            $last_name = mysqli_real_escape_string($conn, $_REQUEST['lastName']);
//            $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
//            $fk_type = mysqli_real_escape_string($conn, $_REQUEST['fk_type']);
//
//            //inserting details into table
//            $sql = $conn->query("INSERT INTO users(username, userPassword, firstName, lastName, email, fk_type) VALUES ( '$username','$passwordOK','$first_name','$last_name','$email','$fk_type'");
//        }
        $conn;



// attempt insert query execution
    }
//closing mysqli connection
    mysqli_close($conn);
    ?>
    <footer>
        <script src="functions/script.js"></script>

    </footer>
</html>
