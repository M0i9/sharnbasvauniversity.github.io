<?php
include_once 'dbconfig.php';
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
    $user_id = $_SESSION['user_id'];
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $dob = trim($_POST['dob']);
    $gender = trim($_POST['gender']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $roll_no = trim($_POST['roll_no']);
    $usn_no = trim($_POST['usn_no']);
    $semester = trim($_POST['semester']);
    $dept = trim($_POST['dept']);
    $party = trim($_POST['party']);
    $sql = "INSERT INTO `voting`(`user_id`, `first_name`, `last_name`, `dob`, `gender`, `email`, `phone`, `roll_no`, `usn_no`, `semester`, `dept`, `party`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
    if ($stmt = mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, "isssssssssss", $user_id, $first_name, $last_name, $dob, $gender, $email, $phone, $roll_no, $usn_no, $semester, $dept, $party);
        if (mysqli_stmt_execute($stmt)) {
            $_POST = array();
            session_unset();
            session_destroy();
            header("location: thankyou.php");
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
} else {
    header("location: poll.php");
}
