<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
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
        if (isset($_POST['adlog'])) {
            $id = $_POST['adid'];
            $pass = $_POST['adpass'];

            if (empty($id) || empty($pass)) {
                echo '<script>alert("Please fill in all fields")</script>';
            } else {
                $query = "SELECT * FROM admin WHERE ADMIN_ID='$id'";
                $res = mysqli_query($con, $query);
                if ($row = mysqli_fetch_assoc($res)) {
                    $db_password = $row['ADMIN_PASSWORD'];
                    if ($pass == $db_password) {
                        echo '<script>alert("Welcome ADMINISTRATOR!");</script>';
                        header("location: admindash.php");
                    } else {
                        echo '<script>alert("Incorrect password")</script>';
                    }
                } else {
                    echo '<script>alert("Incorrect User ID")</script>';
                }
            }
        }
    ?>

    <div class="container">
        <div class="form" style="max-width: 400px; margin: 100px auto; padding: 40px; background: #ffffff; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <h2 style="text-align: center; color: #1e293b;">Admin Login</h2>
            <form method="POST">
                <input type="text" name="adid" class="input-style" placeholder="Enter User ID" required><br>
                <input type="password" name="adpass" class="input-style" placeholder="Password" required><br>
                <div style="margin: 15px 0; display: flex; justify-content: space-between; align-items: center;">
                    <!-- <label><input type="checkbox"> Remember Me</label> -->
                    <p><a href="#" class="forgot-password" style="color: #3b82f6; text-decoration: none;">Forgot Password?</a></p>
                </div>
                <input type="submit" name="adlog" class="btnn" value="LOGIN"><br>
                <!-- <button class="back-btn btnn" style="margin-top: 15px;"><a href="/pro/my_pro/index.php" style="text-decoration: none; color: inherit;">← Back to Home</a></button> -->
            </form>
        </div>
    </div>
</body>

</html>

