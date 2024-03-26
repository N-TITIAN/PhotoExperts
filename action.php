<?php
include "classes.php";
include "dbconfig.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //create
  if (isset ($_POST["action"]) && $_POST["action"] == "create-project") {
    $title = $_POST['title'];
    $date = $_POST['date'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $url = $_POST['url'];

    $photos[] = array_filter($_FILES['photos']['name']);


    $sql = "INSERT INTO projects (project_title,project_date,project_description,category,project_url,owner_id) VALUES ('$title', '$date','$description', '$category','$url', '1')";
    $result = $conn->query($sql);

    if ($result) {
      $project_id = $conn->insert_id;
      $count = count($_FILES['photos']['name']);
      for ($i = 0; $i < $count; $i++) {
        $path = $_FILES['photos']['tmp_name'][$i];

        if ($path != '') {

          $photo_name = uniqid() . '.' . pathinfo($_FILES['photos']['name'][$i], PATHINFO_EXTENSION);
          $newPath = 'assets/img/gallery/' . $photo_name;

          move_uploaded_file($path, $newPath);


          $sql2 = "INSERT INTO photos (photo_name,project_id,photo_path) VALUES ('$photo_name','$project_id','$newPath')";

          $result2 = $conn->query($sql2);

        }
      }

      header('Location: index.php');
      exit();



      // foreach of of the photo in the array, upload it and save the path to the database

      // get the photo name from the array tmp_name
      // deine the storage path by appending img/uniqyPHotoName.extendtion
      // use move_uploaded_file function to save the photo to stoarage, 
      // write an sql sattement to instart the name, projectId, and path to the database
      // thats it
    }
    //$conn->close();
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
    // Start a PHP session
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

   if ($username == "" || $password == "") {
            echo "empty";
            exit();
        } else {

    $new_user= new User();
    $new_user->set_username($username);
    $new_user->set_password($password);
    $new_user->signin($username, $password);
  }
}
}