<?php
session_start();
require("dbcon.php");


if (isset($_POST["delete_student"])) {
    $student_id = mysqli_real_escape_string($con, $_POST["delete_student"]);

    $query = "DELETE FROM students WHERE id='$student_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Delete student successfully!";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not Deleted!";
        header("Location: index.php");
        exit(0);
    }
}



if (isset($_POST['update_student'])) {
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $course = mysqli_real_escape_string($con, $_POST['course']);

    $query = "UPDATE students SET name='$name', phone='$phone',email='$email', course='$course' WHERE id='$student_id'; ";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Updated student successfully!";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not Updated!";
        header("Location: index.php");
        exit(0);
    }
}

if (isset($_POST['save_student'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $course = mysqli_real_escape_string($con, $_POST['course']);

    $query = "INSERT INTO students (name, phone, email, course) VALUES ('$name', '$phone', '$email', '$course')";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $_SESSION['message'] = "Created student successfully!";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not Created!";
        header("Location: index.php");
        exit(0);
    }
}
