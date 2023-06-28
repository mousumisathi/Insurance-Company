<!DOCTYPE html>
<html>
<head>
<title> Insurance Policy</title>
<head>
<body>

<?php

    $mysqli = new mysqli("localhost", "root", "", "list");
    //Initializing the session


    //writing MySQL Query to insert the details
    $sql = "insert into help (Name,mobile_no,email) VALUES ('".$_POST['Name']."','".$_POST['mobile_no']."','".$_POST['email']."')";

    if ($mysqli->query($sql) == true)
    {
        echo "Successful!";
    }
    else
    {
        echo "ERROR: Could not able to execute $sql. "
               .$mysqli->error;
    }

    // Close connection
    $mysqli->close();
?>

  <h1> Contact Us</n></h1>
 <form method="post">
  <p>Name: <input type="text" name="Name"></p>
  <p>Phone: <input type="int" name="mobile_no"></p>
  <p>Email: <input type="text" name="email"></p>

  <input type="submit" value="Submit">
  </form>


</body>
</html>
