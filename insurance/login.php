<?php
session_start();

if ( isset($_POST['cancel'] ) ) {
    header("Location: index.php");
    return;
}

$salt = 'XyZzy12*_';
$stored_hash = '1a52e17fa899cf40fb04cfc42e6352f1';

$failure = false;


if ( isset($_POST['email']) && isset($_POST['pass']) ) {
    if ( strlen($_POST['email']) < 1 || strlen($_POST['pass']) < 1 ) {
        $failure = "Email and password are required";
    } else {
        if(strpos($_POST['email'], '@') !== false)
        {
            $check = hash('md5', $salt.$_POST['pass']);
            if ( $check == $stored_hash ) {

                header("Location: add.php?name=".urlencode($_POST['email']));
                error_log("Login success ".$_POST['email']);
                return;
            } else {
                $failure = "Incorrect password";
                error_log("Login fail ".$_POST['email']." $check");
            }
        }
        else
        {
            $failure = "Email must have an at-sign @";

        }

    }


}

?>
<!DOCTYPE html>
<html>
<head>
<title>MOUSUMI 205040</title>
</head>
<body>
<div class="container">
<h1> Home Page</h1>
<p> “Upload your insurance policy here and we will tell you what your insurance agent didn’t you. You will know if you have overpaid your insurance, and you may cash out what you have paid for the last few years without compromising the protection on your current policy.”</p>
<p>
“Upload your policy and mobile number, our agents will contact you soon.”</p>
<p>
“Terms and conditions:” </p>
<input type="checkbox" >
<label>I have read and agree with the terms and conditions.</label><br>
<br>



<?php

if ( $failure !== false ) {

    echo('<p style="color: red;">'.htmlentities($failure)."</p>\n");
}
?>
<form method="POST">
<label for="number"><b>Mobile Number</b></label>
<input type="text" name="number" id="number"><br/>
<label for="name"><b>Email   </b></label>
<input type="text" name="email" id="name"><br/>
<label for="name"><b>Password   </b></label>
<input type="text" name="pass" id="name"><br/>
<label for="name"><b>Occupation   </b></label>
<input type="text" name="occupation" id="name"><br/>
<br>
<br>
<input type="submit" value="Log In">
<input type="submit" name="cancel" value="Cancel">
</n></form>

<img src="What-is-life-insurance-and-what-are-its-features.jpg" width="300" height="200"/>
<img src="who-can-buy-a-life-insurance-policy.jpg" width="300" height="200"/>

<form action="file_upload.php" method="POST"
            enctype="multipart/form-data">

        <h2>Policy documents upload </h2>


<p>
            Select files to upload:

            <!-- name of the input fields are going to
                be used in our php script-->
            <input type="file" name="files[]" multiple>

            <br><br>

            <input type="submit" name="submit" value="Upload" >
        </p>

    </form>

<p> “Join our FREE seminar and let the experts tell you the truth about your insurance policy “ </p>
<br>
<img src="facebook-instagram.jpg" width="100" height="70"/>

<a class="fb-share" href="https://www.instagram.com/sharer.php?u={{url()->current()}}"><i class="social_facebook"></i> Share</a>
</div>
</body>
</html>
