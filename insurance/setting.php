<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login.css">
    <title>Login Page</title>
</head>

<body>

  <script src="main.js"></script>

    <form action="validate.php" method="post">
        <div class="login-box">
            <h1>Login</h1>

            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Adminname"
                         name="adminname" value="">
            </div>

            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password"
                         name="password" value="">
            </div>



            <form method="POST" action="index.php">

                </form>

<form method="POST" action="login.php">
            <input class="button" type="submit"
                     name="login" value="Sign In">
  </form>

<form method="POST" action="index.php">
                     <input class="button" type="submit"
                              name="login" value="Change Password">
</form>

<form method="POST" action="index.php">
                              <input class="button" type="submit"
                                       name="login" value="Suspend Users">
</form>

<form method="POST" action="add.php">
                                       <input class="button" type="submit"
                                                name="login" value="Add Admin">
</form>

<form method="POST" action="add.php">
                                       <input class="button" type="submit"
                                                name="login" value="Activity logs">
</form>

<form method="POST" action="login.php">
                                                <input class="button" type="submit"
                                                         name="login" value="Register New Seminer">
</form>

<form method="POST" action="AllParticipants.php">
                                                         <input class="button" type="submit"
                                                                  name="login" value="List of Participants">
</form>

<form method="POST" action="add.php">
                                                                  <input class="button" type="submit"
                                                                           name="login" value="Table of Contents">
</form>

<form method="POST" action="index.php">
                                                                           <input class="button" type="submit"
                                                                                    name="login" value="Table of Seminar">
</form>

        </div>
    </form>
</body>

</html>