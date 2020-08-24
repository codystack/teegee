<?php
//Hire Me Modal Start

// initializing variables
$fullName       ="fullName";
$email          ="email";
$username       ="username";
$password       ="password";
$tel            ="tel";
$comment        ="comment";
$errors         = array();


// REGISTER USER


if (isset($_POST['hireme_btn'])) {

    // receive all input values from the form
    $fullName	    = mysqli_real_escape_string($db, $_POST['fullName']);
    $tel	        = mysqli_real_escape_string($db, $_POST['tel']);
    $email		    = mysqli_real_escape_string($db, $_POST['email']);
    $comment	    = mysqli_real_escape_string($db, $_POST['comment']);

    $query = "INSERT INTO hireme (fullName, email, tel, comment) 
  			  VALUES('$fullName', '$email', '$tel', '$comment')";
        mysqli_query($db, $query);
        $_SESSION['email'] = $email;
        $_SESSION['success'] = "You are now logged in";
        header('location: regsuccess');
}

//Hire Me Modal End


//Login User Start

if (isset($_POST['login'])) {
    $username       = mysqli_real_escape_string($db, $_POST['username']);
    $password       = mysqli_real_escape_string($db, $_POST['password']);


    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        while($row = mysqli_fetch_array($results)) {
            $username           = $row['username'];
            $email              = $row['email'];
            $fullname           = $row['fullname'];
        }
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username']       = $username;
            $_SESSION['fullname']       = $fullname;
            $_SESSION['email']          = $email;
            $_SESSION['success'] = "You are now logged in";
            header('location: dashboard');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}

//Login User End
