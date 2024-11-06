<!DOCTYPE html>
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
    if(isset($_POST['adlog']))
    {
        $emaill=$_POST['email'];
        $pass=$_POST['pass'];
        
        
        if(empty($emaill)|| empty($pass))
        {
            echo '<script>alert("please fill the blanks")</script>';
        }
        else{
            $query="SELECT * FROM users WHERE EMAIL='$emaill'";
            $res=mysqli_query($con,$query);
            if($row=mysqli_fetch_assoc($res)){
                $db_password = $row['PASSWORD'];
                if($pass  == $db_password)
                {
                    header("location: cardetails.php");
                    // session_start();
                    // $_SESSION['email'] = $email;
                    
                }
                else{
                    echo '<script>alert("Enter a proper password")</script>';
                }
            }
            else{
                echo '<script>alert("enter a proper email")</script>';
            }
        }
    }







?>

    <!-- <div class="cen">
        <h1 class="heading" style="text-align: center;">Login Page</h1>
        <form class="form" method="POST" action="">
            <input type="email" name="email" class="input-style" placeholder="Enter Email" required><br>
            <input type="password" name="pass" class="input-style" placeholder="Password" required><br>
            <div>
                <label><input type="checkbox"> Remember Me</label>
                <p><a href="#" class="forgot-password">Forgot Password?</a></p>
            </div>
            <input type="submit" name="login" class="btn" value="Log In">
            <p class="link">Don't have an account?<br>
                <a href="register.php">Sign up</a> here</p>
        </form>
        <div class="loader" id="loader"></div>
        <div class="notification" id="notification"></div>

    </div> -->

    <div class="container">
        <div class="form" style="max-width: 400px; margin: 100px auto; padding: 40px; background: #ffffff; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <h2 style="text-align: center; color: #1e293b;">Login</h2>
            <form method="POST">
                <input type="email" name="email" class="input-style" placeholder="Enter User ID" required><br>
                <input type="password" name="pass" class="input-style" placeholder="Password" required><br>
                <div style="margin: 15px 0; display: flex; justify-content: space-between; align-items: center;">
                    <!-- <label><input type="checkbox"> Remember Me</label> -->
                    <p><a href="#" class="forgot-password" style="color: #3b82f6; text-decoration: none;">Forgot Password?</a></p>
                </div>
                <input type="submit" name="adlog" class="btnn" value="LOGIN"><br>
                <!-- <button class="back-btn btnn" style="margin-top: 15px;"><a href="/pro/my_pro/index.php" style="text-decoration: none; color: inherit;">← Back to Home</a></button> -->
            </form>
        </div>
    </div>

    <script>
        document.querySelector('.form').addEventListener('submit', function (event) {
    event.preventDefault();
    const username = document.querySelector('.input-style[type="email"]').value.trim();
    const password = document.querySelector('.input-style[type="password"]').value.trim();
    const loader = document.getElementById('loader');
    const notification = document.getElementById('notification');

    if (!username || !password) {
        notification.textContent = 'Please fill in both fields.';
        notification.className = 'notification error';
        notification.style.display = 'block';
        return;
    }

    loader.style.display = 'block';

    // Simulate an asynchronous login
    setTimeout(() => {
        loader.style.display = 'none';
        notification.textContent = 'Login successful!';
        notification.className = 'notification success';
        notification.style.display = 'block';
    }, 2000);
});

    </script>
    
</body>

</html>
