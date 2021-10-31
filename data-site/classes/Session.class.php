<?php
class Session extends Base {
	public $user;

	function __construct() {

	}

	function print() {
		echo '<pre>';
		print_r($_SESSION);
		echo '</pre>';
	}

	function checkLoginStatus() {
		if (isset($_SESSION["loggedIn"])) {
			if ($_SESSION["loggedIn"] === true) {
				return true;
			} else {
				return false;
			}
		} else {
			$_SESSION["loggedIn"] = false;
		}
	}

	function login($email, $password) {
		//$_SESSION["loggedIn"] = true;
		if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] === true){
		    header("location: " . URL_ROOT);
		    exit;
		} else {
			echo 'Note: not logged in yet';
			//return;
		}
		$db = new Database();

		$sql = 'SELECT * FROM `users` WHERE `email` = ' . $email . ';';

		if (!$users = $db->object('User')) {
			echo '<p>Error: Invalid login credentials.</p>';
			return;
		} else {
			$user = $users[0];
		}
		if(password_verify($password, $user->password)){
			echo '<p>Credentials are valid</p>';
			//die();

	        
	        
	        // Store data in session variables
	        $_SESSION["loggedIn"] = true;
	        $_SESSION["id"] = $user->id;
	        $_SESSION["firstName"] = $user->firstname;
	        $_SESSION["lastName"] = $user->lastname;
	        $_SESSION["email"] = $email;
	        
	        // Redirect user to welcome page
	        header('location: ' . URL_ROOT . 'index.php');
        } else {
	        // Password is not valid, display a generic error message
	        echo "Invalid username or password.";
	        //die();
	    }
	}

	function logout() {
		// Initialize the session
		session_start();
		 
		// Unset all of the session variables
		$_SESSION = array();
		 
		// Destroy the session.
		session_destroy();
		 
		// Redirect to home page
		header("location: " . URL_ROOT);
		exit;
	}

	function validateEmail($email) {
		$email = trim($email);

	}

	function validateMatchingPassword($password) {

	}

	function register() {
		// Processing form data when form is submitted
		if($_SERVER["REQUEST_METHOD"] == "POST"){
		 
		    // Validate username
		    if(empty(trim($_POST["username"]))){
		        $username_err = "Please enter a username.";
		    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
		        $username_err = "Username can only contain letters, numbers, and underscores.";
		    } else{
		        // Prepare a select statement
		        $sql = "SELECT id FROM users WHERE username = ?";
		        
		        if($stmt = mysqli_prepare($link, $sql)){
		            // Bind variables to the prepared statement as parameters
		            mysqli_stmt_bind_param($stmt, "s", $param_username);
		            
		            // Set parameters
		            $param_username = trim($_POST["username"]);
		            
		            // Attempt to execute the prepared statement
		            if(mysqli_stmt_execute($stmt)){
		                /* store result */
		                mysqli_stmt_store_result($stmt);
		                
		                if(mysqli_stmt_num_rows($stmt) == 1){
		                    $username_err = "This username is already taken.";
		                } else{
		                    $username = trim($_POST["username"]);
		                }
		            } else{
		                echo "Oops! Something went wrong. Please try again later.";
		            }

		            // Close statement
		            mysqli_stmt_close($stmt);
		        }
		    }
		    
		    // Validate password
		    if(empty(trim($_POST["password"]))){
		        $password_err = "Please enter a password.";     
		    } elseif(strlen(trim($_POST["password"])) < 6){
		        $password_err = "Password must have atleast 6 characters.";
		    } else{
		        $password = trim($_POST["password"]);
		    }
		    
		    // Validate confirm password
		    if(empty(trim($_POST["confirm_password"]))){
		        $confirm_password_err = "Please confirm password.";     
		    } else{
		        $confirm_password = trim($_POST["confirm_password"]);
		        if(empty($password_err) && ($password != $confirm_password)){
		            $confirm_password_err = "Password did not match.";
		        }
		    }
		    
		    // Check input errors before inserting in database
		    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
		        
		        // Prepare an insert statement
		        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
		         
		        if($stmt = mysqli_prepare($link, $sql)){
		            // Bind variables to the prepared statement as parameters
		            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
		            
		            // Set parameters
		            $param_username = $username;
		            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
		            
		            // Attempt to execute the prepared statement
		            if(mysqli_stmt_execute($stmt)){
		                // Redirect to login page
		                header("location: login.php");
		            } else{
		                echo "Oops! Something went wrong. Please try again later.";
		            }

		            // Close statement
		            mysqli_stmt_close($stmt);
		        }
		    }
		    
		    // Close connection
		    mysqli_close($link);
		}
	}
}