<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
    </script>
    <link rel="stylesheet" href="css/style2.css">
    <script type="text/javascript">
        function preventBack() {
            window.history.forward();
        }

        setTimeout("preventBack()", 0);

        window.onunload = function () { null };
    </script>
</head>

<body>
    <?php
    require_once('connection.php');
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];


        if (empty($email) || empty($pass)) {
            echo '<script>alert("please fill the blanks")</script>';
        } else {
            $query = "select *from users where EMAIL='$email'";
            $res = mysqli_query($con, $query);
            if ($row = mysqli_fetch_assoc($res)) {
                $db_password = $row['PASSWORD'];
                if (md5($pass) == $db_password) {
                    header("location: cardetails.php");
                    session_start();
                    $_SESSION['email'] = $email;

                } else {
                    echo '<script>alert("Enter a proper password")</script>';
                }
            } else {
                echo '<script>alert("enter a proper email")</script>';
            }
        }
    }







    ?>
    <div class="hai">
        <div class="container">
            <div class="form"
                style="max-width: 400px; margin: 100px auto; padding: 40px; background: #ffffff; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <h2 style="text-align: center; color: #1e293b;">Login</h2>
                <form method="POST">
                    <input type="email" name="email" class="input-style" placeholder="Enter User ID" required><br>
                    <input type="password" name="pass" class="input-style" placeholder="Password" required><br>
                    <div style="margin: 15px 0; display: flex; justify-content: space-between; align-items: center;">
                        <p><a href="#" class="forgot-password" style="color: #3b82f6; text-decoration: none;">Forgot
                                Password?</a></p>
                    </div>
                    <input type="submit" name="adlog" class="btnn" value="LOGIN"><br>
                </form>
            </div>
        </div>
    </div>
</body>

</html> -->




<!DOCTYPE html>
<html lang="en">

<head>

    <title>CAR RENTAL</title>
    <script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
    </script>
    <script type="text/javascript">
        function preventBack() {
            window.history.forward();
        }

        setTimeout("preventBack()", 0);

        window.onunload = function () { null };
    </script>
    <link rel="stylesheet" href="css/style2.css">
</head>

<body>

    <?php
    require_once('connection.php');
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];


        if (empty($email) || empty($pass)) {
            echo '<script>alert("please fill the blanks")</script>';
        } else {
            $query = "select *from users where EMAIL='$email'";
            $res = mysqli_query($con, $query);
            if ($row = mysqli_fetch_assoc($res)) {
                $db_password = $row['PASSWORD'];
                if (md5($pass) == $db_password) {
                    header("location: cardetails.php");
                    session_start();
                    $_SESSION['email'] = $email;

                } else {
                    echo '<script>alert("Enter a proper password")</script>';
                }
            } else {
                echo '<script>alert("enter a proper email")</script>';
            }
        }
    }







    ?>
    <div class="hai">
        <div class="content">
            <!-- <div class="form">
                <h2>Login Here</h2> -->
            <div class="form"
                style="max-width: 400px; margin: 100px auto; padding: 40px; background: #ffffff; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <h2 style="text-align: center; color: #1e293b;">Login Here</h2>
                </form>
                <form method="POST">
                    <input type="email" name="email" placeholder="Enter Email Here">
                    <input type="password" name="pass" placeholder="Enter Password Here">
                    <input class="btnn" type="submit" value="Login" name="login"></input>
                </form>
                <br>
                <p class="link">Don't have an account?<br>
                    <a href="register.php">Sign up</a> here</a>
                </p>
            </div>
        </div>
    </div>
</body>

</html>