<?php 

class Registration{
    
    /* __constructor()
     * Constructor will be called every time Registration class is called ($registration = new Registration())
     */
     public function __construct(){

        /* If registration data is posted call createUser function. */
        if (isset($_POST["registration"])) {
            $this->createUser();
        }
        
    } /* End __construct() */

    
    /* Function createUser(){
    * Function that includes everything for new user creation.
    * Data is taken from registration form, converted to prevent SQL injection and
    * checked that values are filled, if all is correct data is entered to user database.
    */
    private function createUser(){
    
        /* Require credentials for DB connection. */
        require ('config/dbconnect.php');

        /* Check that data has been submitted. */
        if(isset($_POST['registration'])){

            /* User input variables converted to string to prevent SQL injections. */
            $username = mysqli_real_escape_string($conn,trim($_POST['username']));  
            $password = mysqli_real_escape_string($conn,trim($_POST['password']));
            $email = mysqli_real_escape_string($conn,($_POST['email']));

            /* This is where we hash the password. */
            $securing = password_hash($password, PASSWORD_DEFAULT);

            /* Check that all fields are filled with values. */
            if(!empty($username) && !empty($password) && !empty($email)){
                
                /* Check if username or email is already taken */
                $checkavailable = "SELECT * FROM `users` WHERE username = '$username' OR email = '$email' "; // Query to cross check Company name with database.
                $result = mysqli_query($conn, $checkavailable);
                
                /* If username or email is taken */
                if ($result->num_rows != 0) {
                    /* Promt user error about username or email already taken */
                    header('Location: index.php');
                    $_SESSION['errorMessage'] = 3;
                    exit();
                } else {
                    /* Insert data into database. */
                    $sql = "INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES ('', '$username', "
                        . "'$email', '$securing');";
                    $result = mysqli_query($conn, $sql);
                
                    /* If registration is successful return user to registration.php and promt user success pop-up. */
                    header('Location: index.php');
                    $_SESSION['errorMessage'] = 4;
                    exit();
                } /* /EndIF */  
                
            } else {
                /* If registration fails return user to registration.php and promt user failure error. */
                header('Location: index.php');
                $_SESSION['errorMessage'] = 2;
                exit();
            }

        }   /* /EndIF */ 
        
    }   /* End createUser() */
    
    
} /* End class Registration */


