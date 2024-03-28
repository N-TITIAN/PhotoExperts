<?php
include "classes.php";
include "../models/dbconfig.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //create
  if (isset ($_POST["action"]) && $_POST["action"] == "create-project") {
  
    $new_project = new Projects();
    $new_project->set_project_title($_POST['title']);
    $new_project->set_project_date($_POST['date']);
    $new_project->set_project_description( $_POST['description']);
    $new_project->set_category( $_POST['description']);
    $new_project->set_project_url($_POST['url']);

    $new_project->set_owner_id($_SESSION['user_id']);

    $new_project->create_new_project();

 
  }


  // Check if the form is submitted
  if (isset ($_POST['action']) && $_POST['action'] == "register") {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $fullname = $_POST['fullname'];
    $repeatPassword = $_POST["password-repeat"];
    $new_user= new User();
    $new_user->set_email($email);
    $new_user->set_username($username);
    $new_user->set_full_name($fullname);
    $new_user->set_password($password);

    $new_user->register($repeatPassword);


  }
  // login with seesions 


  // Check if the form is submitted
  if (isset ($_POST['action']) && $_POST['action'] == "login") {

    

   if ($_POST['username'] == "" || $_POST['password']== "") {
            echo "empty";
            exit();
        } else {

    $new_user= new User();
    $new_user->set_username($_POST['username']);
    $new_user->set_password($_POST['password']);
    $new_user->signin($_POST['username'], $_POST['password']);
  }
}
// logout

}

if (isset($_POST['submit']) && $_POST['submit'] == "logout") {
  session_unset();
  session_destroy();
  $success = urlencode("logout sucessfull");
  header("Location: dashboard.php?success=$success");
  exit();
}