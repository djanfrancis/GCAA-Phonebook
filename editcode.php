<?php
session_start();
require 'connection.php';

if(isset($_POST['delete_phonebook']))
{
    $phonebook_id = mysqli_real_escape_string($con, $_POST['delete_phonebook']);

    $query = "DELETE FROM phonebook1 WHERE id='$phonebook_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully ";
        header("Location: admindex.php");
        exit(0);
    } 
    else
    {
        $_SESSION['message'] = "Try Again";
        header("Location: admindex.php");
        exit(0);
    }
}

if(isset($_POST['update_phonebook']))
{
    $phonebook_id = mysqli_real_escape_string($con, $_POST['phonebook_id']);

    $JOBTITLE = mysqli_real_escape_string($con, $_POST['JOBTITLE']);
    $EXTENSION = mysqli_real_escape_string($con, $_POST['EXTENSION']);
    $NAMES = mysqli_real_escape_string($con, $_POST['NAMES']);
    $FLOOR = mysqli_real_escape_string($con, $_POST['FLOOR']);

    $query = "UPDATE phonebook1 SET JOBTITLE='$JOBTITLE', EXTENSION='$EXTENSION', NAMES='$NAMES', FLOOR='$FLOOR' WHERE id='$phonebook_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Update Successful";
        header("Location: admindex.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Update not successfull";
        header("Location: admindex.php");
        exit(0);
    }

}


if(isset($_POST['save_phonebook']))
{
    $JOBTITLE = mysqli_real_escape_string($con, $_POST['JOBTITLE']);
    $EXTENSION = mysqli_real_escape_string($con, $_POST['EXTENSION']);
    $NAMES = mysqli_real_escape_string($con, $_POST['NAMES']);
    $FLOOR = mysqli_real_escape_string($con, $_POST['FLOOR']);

    $query = "INSERT INTO phonebook1 (JOBTITLE,EXTENSION,NAMES,FLOOR) VALUES ('$JOBTITLE','$EXTENSION','$NAMES','$FLOOR')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Succesfully saved to the phonebook";
        header("Location: addnew.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Unable to save. Try Again!";
        header("Location: admindex.php");
        exit(0);
    }
}

?>