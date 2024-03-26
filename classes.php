<?php


class User
{
    private $full_name;
    private $user_id;
    private $username;
    private $email;
    private $password;
    function set_full_name($full_name){
        $this->full_name = $full_name;
    } 
    // function set_user_id($user_id){
    //     $this->user_id = $user_id;
    // }
    function set_username($username){   
        $this->username = $username;
    }
    function set_email($email){
$this->email = $email;
    }
    function set_password($password){
        $this->password = $password;
    }
    function get_full_name(){
        return $this->full_name;
    }
    // function get_user_id(){
    //     return $this->user_id;
    // }
    function get_username(){
        return $this->username;
    }
    function get_email(){
        return $this->email;
    }
    function get_password(){
        return $this->password;
    }
    // method to register 
    public function register($passwordrepeat)
    {
        include "dbconfig.php";
     
        if ($this->get_password() == $passwordrepeat) {

            $hashed_password = password_hash($this->get_password(), PASSWORD_DEFAULT);

            $fullname = $this->get_full_name();
            $email = $this->get_email();
            $password = $this->get_password();
            $username = $this->get_username();
            $fileData ="$username |$hashed_password|$email|$fullname\n";
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
        session_start();
        $password = $this->get_password();
        $username = $this->get_username();
       
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user["password"])) {
                $_SESSION['username'] = $username;
               
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

class Projects{
    
}

