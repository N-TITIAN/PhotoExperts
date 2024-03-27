<?php


class User
{
    private $full_name;
    private $user_id;
    private $username;
    private $email;
    private $password;
    function set_full_name($full_name)
    {
        $this->full_name = $full_name;
    }
   
    function set_username($username)
    {
        $this->username = $username;
    }
    function set_email($email)
    {
        $this->email = $email;
    }
    function set_password($password)
    {
        $this->password = $password;
    }
    function get_full_name()
    {
        return $this->full_name;
    }
   
    function get_username()
    {
        return $this->username;
    }
    function get_email()
    {
        return $this->email;
    }
    function get_password()
    {
        return $this->password;
    }
    // method to register 
    public function session(
        $username,
        $user_id
    ) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['user_id'] = $user_id;
        //  return $_SESSION['user_id'];
    }
    public function register($passwordrepeat)
    {
        include "dbconfig.php";

        if ($this->get_password() == $passwordrepeat) {

            $hashed_password = password_hash($this->get_password(), PASSWORD_DEFAULT);

            $fullname = $this->get_full_name();
            $email = $this->get_email();
            $password = $this->get_password();
            $username = $this->get_username();
            $fileData = "$username |$hashed_password|$email|$fullname\n";
            file_put_contents('users.csv', $fileData, FILE_APPEND);
            $sql = "INSERT INTO users (username, password, email, full_name) VALUES ('$username', '$hashed_password', '$email', '$fullname')";
            if ($conn->query($sql) === TRUE) {

                header('Location: sign-in.php');
                exit;
            } else {
                echo "Error: " . $sql . "<br>" . $conn_error;
            }
        } else {
            // Passwords don't match, display error message
            $error = "Passwords do not match. Please try again.";

            header('Location: register.php?error=' . urlencode($error));
            exit;
        }

    }

    //method to login
    public function signin($username, $password)
    {
        include "dbconfig.php";
     
        $password = $this->get_password();
        $username = $this->get_username();

        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $conn->query($sql);
           
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user["password"])) {
              session_start();
                
              
                 $_SESSION['username'] = $username;
                 $_SESSION['user_id'] = $user['user_id'];
               
                if (isset ($_POST['rememberme'])) {
                    setcookie('username', $username, time() + (86400 * 30), "/"); // 86400  here= 1 day
                }

                header("Location: index.php");
                exit();
            } else {
                $error = "Invalid username or password.";
                header("Location: sign-in.php?error=" . urlencode($error));
                exit();
            }
        } else {
            header("Location: sign-in.php");
            exit();
        }

    }

 
}
//project class
class Projects
{
    //include "dbconfig.php";
    private $project_title;
    private $owner_id;
    private $project_date;
    private $project_description;
    private $category;
    private $project_url;

    //setters and getters 
    function set_project_title($title)
    {
        $this->project_title = $title;
    }
    function set_owner_id($owner_id)
    {
        $this->owner_id = $owner_id;
    }
    function set_project_date($date)
    {
        $this->project_date = $date;
    }
    function set_project_description($description)
    {
        $this->project_description = $description;
    }
    function set_category($category)
    {
        $this->category = $category;

    }
    function set_project_url($url)
    {
        $this->project_url = $url;
    }
    function get_project_title()
    {
        return $this->project_title;
    }
    function get_category()
    {
        return $this->category;
    }
    function get_project_url()
    {

        return $this->project_url;
    }
    function get_project_description()
    {
        return $this->project_description;
    }
    function get_project_date()
    {
        return $this->project_date;
    }
    function get_owner_id(){
        return $this->owner_id;
    }
// methods 
function create_new_project(){
    include "dbconfig.php";
    include "functions.php";
   $project_title=$this->get_project_title();
   $project_description=$this->get_project_description();
   $project_url=$this->get_project_url();
   $category=$this->get_category();
   $project_date=$this->get_project_date();
   $owner_id=$this->get_owner_id();

        $photos[] = array_filter($_FILES['photos']['name']);

    $sql = "INSERT  INTO projects (project_title,project_date,project_description,category,project_url,owner_id) VALUES ('$project_title', '$project_date','$project_description', '$category','$project_url', '$owner_id')";
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
    }
    //$conn->close();
  }


    }





