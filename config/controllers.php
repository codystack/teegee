<?php
// connect to the database


//Hire Me Modal Start

// initializing variables
$fullName       ="fullName";
$email          ="email";
$tel            ="tel";
$comment        ="comment";
$errors         = array();


// REGISTER USER


if (isset($_POST['hireme_btn'])) {

    $user_check_query = "SELECT * FROM hireme WHERE fullName='$fullName' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);


    // receive all input values from the form
    $fullName	    = mysqli_real_escape_string($db, $_POST['fullName']);
    $tel	        = mysqli_real_escape_string($db, $_POST['tel']);
    $email		    = mysqli_real_escape_string($db, $_POST['email']);
    $comment	    = mysqli_real_escape_string($db, $_POST['comment']);


    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {

        $query = "INSERT INTO hireme (fullName, email, tel, comment) 
  			  VALUES('$fullName', '$email', '$tel', '$comment')";
        if($query){
            //Send Verification Mail
            $to = $email;
            $subject = "Registration Successful";

            $message = "
                          <html>
                          <head>
                          <title></title>
                          <style>
                          /*! Email Template Preview Purpose */
                          .email-wraper { background: #e0e8f3; font-size: 14px; line-height: 22px; font-weight: 400; color: #758698; width: 100%; }
                          .email-wraper a { color: #0a183d; word-break: break-all; }
                          .email-wraper .link-block { display: block; }
                          .email-ul { margin: 5px 0; padding: 0; }
                          .email-ul:not(:last-child) { margin-bottom: 10px; }
                          .email-ul li { list-style: disc; list-style-position: inside; }
                          .email-ul-col2 { display: flex; flex-wrap: wrap; }
                          .email-ul-col2 li { width: 50%; padding-right: 10px; }
                          .email-body { width: 96%; max-width: 620px; margin: 0 auto; background: #ffffff; border: 1px solid #e6effb; border-bottom: 4px solid #0a183d; }
                          .email-success { border-bottom-color: #00d285; }
                          .email-warning { border-bottom-color: #ffc100; }
                          .email-btn { background: #0a183d; border-radius: 4px; color: #ffffff !important; display: inline-block; font-size: 13px; font-weight: 600; line-height: 44px; text-align: center; text-decoration: none; text-transform: uppercase; padding: 0 30px; }
                          .email-btn-sm { line-height: 38px; }
                          .email-header, .email-footer { width: 100%; max-width: 620px; margin: 0 auto; }
                          .email-logo { height: 40px; }
                          .email-title { font-size: 13px; color: #0a183d; padding-top: 12px; }
                          .email-heading { font-size: 18px; color: #0a183d; font-weight: 600; margin: 0; }
                          .email-heading-sm { font-size: 16px; }
                          .email-heading-s2 { font-size: 15px; color: #000000; font-weight: 600; margin: 0; text-transform: uppercase; margin-bottom: 10px; }
                          .email-heading-s3 { font-size: 18px; color: #0a183d; font-weight: 400; margin-bottom: 8px; }
                          .email-heading-success { color: #00d285; }
                          .email-heading-warning { color: #ffc100; }
                          .email-note { margin: 0; font-size: 13px; line-height: 22px; color: #6e81a9; }
                          .email-copyright-text { font-size: 13px; }
                          .email-social li { display: inline-block; padding: 4px; }
                          .email-social li a { display: inline-block; height: 30px; width: 30px; border-radius: 50%; background: #ffffff; }
                          .email-social li a img { width: 30px; }
                          .pad { 
                              padding-left: 20px;
                              padding-right: 20px;
                          }
    
                          @media (max-width: 480px) { .email-preview-page .card { border-radius: 0; margin-left: -20px; margin-right: -20px; }
                          .email-ul-col2 li { width: 100%; } }
    
                          @font-face{font-family:Roboto;src:url(../fonts/Roboto-Light.eot);src:local('Roboto Light'),local('Roboto-Light'),url(../fonts/Roboto-Lightd41d.eot?#iefix) format('embedded-opentype'),url(../fonts/Roboto-Light.woff2) format('woff2'),url(../fonts/Roboto-Light.woff) format('woff'),url(../fonts/Roboto-Light.ttf) format('truetype');font-weight:300;font-style:normal}@font-face{font-family:Roboto;src:url(../fonts/Roboto-Regular.eot);src:local('Roboto'),local('Roboto-Regular'),url(../fonts/Roboto-Regulard41d.eot?#iefix) format('embedded-opentype'),url(../fonts/Roboto-Regular.woff2) format('woff2'),url(../fonts/Roboto-Regular.woff) format('woff'),url(../fonts/Roboto-Regular.ttf) format('truetype');font-weight:400;font-style:normal}@font-face{font-family:Roboto;src:url(../fonts/Roboto-Medium.eot);src:local('Roboto Medium'),local('Roboto-Medium'),url(../fonts/Roboto-Mediumd41d.eot?#iefix) format('embedded-opentype'),url(../fonts/Roboto-Medium.woff2) format('woff2'),url(../fonts/Roboto-Medium.woff) format('woff'),url(../fonts/Roboto-Medium.ttf) format('truetype');font-weight:500;font-style:normal}@font-face{font-family:Roboto;src:url(../fonts/Roboto-Bold.eot);src:local('Roboto Bold'),local('Roboto-Bold'),url(../fonts/Roboto-Boldd41d.eot?#iefix) format('embedded-opentype'),url(../fonts/Roboto-Bold.woff2) format('woff2'),url(../fonts/Roboto-Bold.woff) format('woff'),url(../fonts/Roboto-Bold.ttf) format('truetype');font-weight:700;font-style:normal}body{font-family:Roboto,sans-serif;font-size:14px;line-height:1.7;font-weight:400;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;position:relative;background:#e0e8f3;min-width:320px;color:#495463}.pd-0-5x{padding:5px}.pd-1x{padding:10px}.pd-1-5x{padding:15px}.pd-2x{padding:20px}.pd-2-5x{padding:25px}.pd-3x{padding:30px}.pd-3-5x{padding:35px}.pd-4x{padding:40px}.pd-4-5x{padding:45px}.pd-5x{padding:50px}.pd-5-5x{padding:55px}.pd-6x{padding:60px}.pd-6-5x{padding:65px}.pd-7x{padding:70px}.pd-7-5x{padding:75px}.pd-8x{padding:80px}.pd-8-5x{padding:85px}.pd-9x{padding:90px}.pd-9-5x{padding:95px}.pd-10x{padding:100px}.pd-10-5x{padding:105px}.pd-11x{padding:110px}.pd-11-5x{padding:115px}.pd-12x{padding:120px}.pd-12-5x{padding:125px}.pd-13x{padding:130px}.pd-13-5x{padding:135px}.pd-14x{padding:140px}.pd-14-5x{padding:145px}.pd-15x{padding:150px}.pd-15-5x{padding:155px}.pd-16x{padding:160px}.pd-16-5x{padding:165px}.pd-17x{padding:170px}.pd-17-5x{padding:175px}.pd-18x{padding:180px}.pd-18-5x{padding:185px}.pd-19x{padding:190px}.pd-19-5x{padding:195px}.pd-20x{padding:200px}.pd-20-5x{padding:205px}.pdl-0-5x{padding-left:5px}.pdl-1x{padding-left:10px}.pdl-1-5x{padding-left:15px}.pdl-2x{padding-left:20px}.pdl-2-5x{padding-left:25px}.pdl-3x{padding-left:30px}.pdl-3-5x{padding-left:35px}.pdl-4x{padding-left:40px}.pdl-4-5x{padding-left:45px}.pdl-5x{padding-left:50px}.pdl-5-5x{padding-left:55px}.pdl-6x{padding-left:60px}.pdl-6-5x{padding-left:65px}.pdl-7x{padding-left:70px}.pdl-7-5x{padding-left:75px}.pdl-8x{padding-left:80px}.pdl-8-5x{padding-left:85px}.pdl-9x{padding-left:90px}.pdl-9-5x{padding-left:95px}.pdl-10x{padding-left:100px}.pdl-10-5x{padding-left:105px}.pdl-11x{padding-left:110px}.pdl-11-5x{padding-left:115px}.pdl-12x{padding-left:120px}.pdl-12-5x{padding-left:125px}.pdl-13x{padding-left:130px}.pdl-13-5x{padding-left:135px}.pdl-14x{padding-left:140px}.pdl-14-5x{padding-left:145px}.pdl-15x{padding-left:150px}.pdl-15-5x{padding-left:155px}.pdl-16x{padding-left:160px}.pdl-16-5x{padding-left:165px}.pdl-17x{padding-left:170px}.pdl-17-5x{padding-left:175px}.pdl-18x{padding-left:180px}.pdl-18-5x{padding-left:185px}.pdl-19x{padding-left:190px}.pdl-19-5x{padding-left:195px}.pdl-20x{padding-left:200px}.pdl-20-5x{padding-left:205px}.pdr-0-5x{padding-right:5px}.pdr-1x{padding-right:10px}.pdr-1-5x{padding-right:15px}.pdr-2x{padding-right:20px}.pdr-2-5x{padding-right:25px}.pdr-3x{padding-right:30px}.pdr-3-5x{padding-right:35px}.pdr-4x{padding-right:40px}.pdr-4-5x{padding-right:45px}.pdr-5x{padding-right:50px}.pdr-5-5x{padding-right:55px}.pdr-6x{padding-right:60px}.pdr-6-5x{padding-right:65px}.pdr-7x{padding-right:70px}.pdr-7-5x{padding-right:75px}.pdr-8x{padding-right:80px}.pdr-8-5x{padding-right:85px}.pdr-9x{padding-right:90px}.pdr-9-5x{padding-right:95px}.pdr-10x{padding-right:100px}.pdr-10-5x{padding-right:105px}.pdr-11x{padding-right:110px}.pdr-11-5x{padding-right:115px}.pdr-12x{padding-right:120px}.pdr-12-5x{padding-right:125px}.pdr-13x{padding-right:130px}.pdr-13-5x{padding-right:135px}.pdr-14x{padding-right:140px}.pdr-14-5x{padding-right:145px}.pdr-15x{padding-right:150px}.pdr-15-5x{padding-right:155px}.pdr-16x{padding-right:160px}.pdr-16-5x{padding-right:165px}.pdr-17x{padding-right:170px}.pdr-17-5x{padding-right:175px}.pdr-18x{padding-right:180px}.pdr-18-5x{padding-right:185px}.pdr-19x{padding-right:190px}.pdr-19-5x{padding-right:195px}.pdr-20x{padding-right:200px}.pdr-20-5x{padding-right:205px}.pdt-0-5x{padding-top:5px}.pdt-1x{padding-top:10px}.pdt-1-5x{padding-top:15px}.pdt-2x{padding-top:20px}.pdt-2-5x{padding-top:25px}.pdt-3x{padding-top:30px}.pdt-3-5x{padding-top:35px}.pdt-4x{padding-top:40px}.pdt-4-5x{padding-top:45px}.pdt-5x{padding-top:50px}.pdt-5-5x{padding-top:55px}.pdt-6x{padding-top:60px}.pdt-6-5x{padding-top:65px}.pdt-7x{padding-top:70px}.pdt-7-5x{padding-top:75px}.pdt-8x{padding-top:80px}.pdt-8-5x{padding-top:85px}.pdt-9x{padding-top:90px}.pdt-9-5x{padding-top:95px}.pdt-10x{padding-top:100px}.pdt-10-5x{padding-top:105px}.pdt-11x{padding-top:110px}.pdt-11-5x{padding-top:115px}.pdt-12x{padding-top:120px}.pdt-12-5x{padding-top:125px}.pdt-13x{padding-top:130px}.pdt-13-5x{padding-top:135px}.pdt-14x{padding-top:140px}.pdt-14-5x{padding-top:145px}.pdt-15x{padding-top:150px}.pdt-15-5x{padding-top:155px}.pdt-16x{padding-top:160px}.pdt-16-5x{padding-top:165px}.pdt-17x{padding-top:170px}.pdt-17-5x{padding-top:175px}.pdt-18x{padding-top:180px}.pdt-18-5x{padding-top:185px}.pdt-19x{padding-top:190px}.pdt-19-5x{padding-top:195px}.pdt-20x{padding-top:200px}.pdt-20-5x{padding-top:205px}.pdb-0-5x{padding-bottom:5px}.pdb-1x{padding-bottom:10px}.pdb-1-5x{padding-bottom:15px}.pdb-2x{padding-bottom:20px}.pdb-2-5x{padding-bottom:25px}.pdb-3x{padding-bottom:30px}.pdb-3-5x{padding-bottom:35px}.pdb-4x{padding-bottom:40px}.pdb-4-5x{padding-bottom:45px}.pdb-5x{padding-bottom:50px}.pdb-5-5x{padding-bottom:55px}.pdb-6x{padding-bottom:60px}.pdb-6-5x{padding-bottom:65px}.pdb-7x{padding-bottom:70px}.pdb-7-5x{padding-bottom:75px}.pdb-8x{padding-bottom:80px}.pdb-8-5x{padding-bottom:85px}.pdb-9x{padding-bottom:90px}.pdb-9-5x{padding-bottom:95px}.pdb-10x{padding-bottom:100px}.pdb-10-5x{padding-bottom:105px}.pdb-11x{padding-bottom:110px}.pdb-11-5x{padding-bottom:115px}.pdb-12x{padding-bottom:120px}.pdb-12-5x{padding-bottom:125px}.pdb-13x{padding-bottom:130px}.pdb-13-5x{padding-bottom:135px}.pdb-14x{padding-bottom:140px}.pdb-14-5x{padding-bottom:145px}.pdb-15x{padding-bottom:150px}.pdb-15-5x{padding-bottom:155px}.pdb-16x{padding-bottom:160px}.pdb-16-5x{padding-bottom:165px}.pdb-17x{padding-bottom:170px}.pdb-17-5x{padding-bottom:175px}.pdb-18x{padding-bottom:180px}.pdb-18-5x{padding-bottom:185px}.pdb-19x{padding-bottom:190px}.pdb-19-5x{padding-bottom:195px}.pdb-20x{padding-bottom:200px}.pdb-20-5x{padding-bottom:205px}
    
                          /*# sourceMappingURL=style-email.css.map */
    
                          </style>
                          </head>
                          <body>
                          <div class='page-content'>
                          <div class='container'>
                          <div class='row justify-content-center'>
                          <div class='col-xl-9 col-lg-10'>
                          <div class='content-area card'>
                          <div class='card-innr'>
                          <table class='email-wraper'>
                              <tbody>
                                  <tr>
                                      <td class='pdt-4x pdb-4x'>
                                          <table class='email-header'>
                                              <tbody>
                                                  <tr>
                                                      <td class='text-center pdb-2-5x'>
                                                          <center>
                                                          <a href='https://elite-fund.com' target='_blank'><img class='email-logo' src='https://i.imgur.com/AdhLhQ5.png' /></a>
                                                          </center>
                                                      </td>
                                                  </tr>
                                              </tbody>
                                          </table>
                                          <table class='email-body'>
                                              <div style='padding-left: 30px;'>
                                              <tbody>
                                                  <tr>
                                                      <td class='pd-3x pdb-1-5x'><h2 class='email-heading'>Registration Successful</h2></td>
                                                  </tr>
                                                  <tr>
                                                      <td class='pdl-3x pdr-3x pdb-2x'>
                                                          <p class='mgb-1x'>Hi $username,</p>
                                                          <p class='mgb-1x'>
                                                              Welcome! <br />
                                                              You are receiving this email because you have registered on Elite Funds.
                                                          </p>
                                                          <p class='mgb-1x'>Please click on the link below to login.</p>
                                                          <a href='https://elite-fund.com/login' class='email-btn'>Login Now</a>
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <td class='pd-3x pdt-2x pdb-3x'>
                                                          <p>If you did not make this request, please contact us or ignore this message.</p>
                                                          <p class='email-note'>This is an automatically generated email please do not reply to this email. If you face any issues, please contact us at hello@elite-fund.com</p>
                                                      </td>
                                                  </tr>
                                              </tbody>
                                              </div>
                                          </table>
                                      </td>
                                  </tr>
                              </tbody>
                          </table>
                          </div>
                          </div>
                          </div>
                          </div>
                          </div>
                          </div>
                          </body>
                          </html>
                          ";

            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // More headers
            $headers .= 'From: Elite Funds™ <donotreply@elite-fund.com>' . "\r\n";

            mail($to,$subject,$message,$headers);
        }
        mysqli_query($db, $query);
        $_SESSION['fullName'] = $fullName;
        $_SESSION['success'] = "You are now logged in";
        header('location: regsuccess');
    }
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
