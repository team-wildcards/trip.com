<?php session_start();

//Proper Database configuration here
include 'includes/db_connection.php';
include 'includes/functions.php';

if (isset($_POST['signup'])) {

    $fullname_unsafe = $_POST['fullname'];
    $email_unsafe = $_POST['email'];
    $pass_unsafe = $_POST['password'];
    $conf_pass_unsafe = $_POST['confirm_password'];

    $fullname = mysqli_real_escape_string($con, $fullname_unsafe);
    $email = mysqli_real_escape_string($con, $email_unsafe);
    $password = mysqli_real_escape_string($con, $pass_unsafe);
    $confirm_password = mysqli_real_escape_string($con, $conf_pass_unsafe);

    //Validation

    //check if email exists
    $email_query = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'") or die(mysqli_error($con));
    $email_count = mysqli_num_rows($email_query);

    if (validateEmail($email)) {
        addAlert('error', 'Invalid Email address');
        echo "<script>document.location='signup.php'</script>";
    } else if (strlen($password) < 6) {
        addAlert('error', 'Password must be atleast Six (6) characters');
        echo "<script>document.location='signup.php'</script>";
    } else if ($password != $confirm_password) {
        addAlert('error', 'Passwords dont Match');
        echo "<script>document.location='signup.php'</script>";
    } else if ($email_count > 0) {
        addAlert('error', 'Email address already exists!');
        echo "<script>document.location='signup.php'</script>";
    } else {
        include_once('includes/config.php');

        //file system or db
        if ($implementationType = 'FILE') {

            $jsonString = file_get_contents('users.json');
            $data = json_decode($jsonString, true);

            $users = $data['users'];
            $new_user = array('user_id' => 00,  'fullname' => $fullname, 'email' => $email, 'password' =>  $password);

            array_push($users, $new_user);

            $newArray = $arr = array('users' => [$new_user, $new_user]);
            $newJsonString = json_encode($newArray);
            $res = file_put_contents('users.json', $newJsonString);

            if ($res) {
                addAlert('success', 'Registration Successful! Please Login');
                echo "<script type='text/javascript'>document.location='index.php'</script>";
            } else {
                addAlert('error', 'Something went wrong!');
                echo "<script type='text/javascript'>document.location='index.php'</script>";
            }
        } else {

            $res = mysqli_query($con, "INSERT INTO users SET fullname = '$fullname', password = '$password', email = '$email'") or die(mysqli_error($con));
            if ($res) {
                addAlert('success', 'Registration Successful! Please Login');
                echo "<script type='text/javascript'>document.location='index.php'</script>";
            } else {
                addAlert('error', 'Something went wrong!');
                echo "<script type='text/javascript'>document.location='index.php'</script>";
            }
        }
    }
} else {
    header('Location index.php');
}
