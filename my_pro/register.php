<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration</title>
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
    <link rel="stylesheet" href="css/reg.css" type="text/css">
</head>

<body>

    <?php
    require_once('connection.php');

    if (isset($_POST['regs'])) {
        $fname = mysqli_real_escape_string($con, $_POST['fname']);
        $lname = mysqli_real_escape_string($con, $_POST['lname']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $lic = mysqli_real_escape_string($con, $_POST['lic']);
        $ph = mysqli_real_escape_string($con, $_POST['ph']);
        $pass = mysqli_real_escape_string($con, $_POST['pass']);
        $cpass = mysqli_real_escape_string($con, $_POST['cpass']);
        $gender = mysqli_real_escape_string($con, $_POST['gender']);
        $Pass = md5($pass);

        // Check if email already exists
        $checkEmailQuery = "SELECT * FROM users WHERE EMAIL = '$email'";
        $emailResult = mysqli_query($con, $checkEmailQuery);

        if (mysqli_num_rows($emailResult) > 0) {
            // Email already exists
            echo '<script>alert("Registration successful! Please login.")</script>';
            echo '<script>window.location.href = "index.php";</script>';
        } else {
            // Proceed with registration if email is unique
            if ($pass === $cpass) {
                $sql = "INSERT INTO users (FNAME, LNAME, EMAIL, LIC_NUM, PHONE_NUMBER, PASSWORD, GENDER)
                    VALUES ('$fname', '$lname', '$email', '$lic', '$ph', '$Pass', '$gender')";

                if (mysqli_query($con, $sql)) {
                    echo '<script>alert("Email already exists! Please login.")</script>';
                    echo '<script>window.location.href = "index.php";</script>';
                } else {
                    echo '<script>alert("Error: Unable to register. Please try again.")</script>';
                }
            } else {
                echo '<script>alert("Passwords do not match.")</script>';
            }
        }
    }
    ?>

    <div class="main">
        <div class="register">
            <h2>Register Here</h2>
            <form id="register" action="register.php" method="POST">
                <label>First Name:</label>
                <input type="text" name="fname" placeholder="Enter Your First Name" required>

                <label>Last Name:</label>
                <input type="text" name="lname" placeholder="Enter Your Last Name" required>

                <label>Email:</label>
                <input type="email" name="email" placeholder="Enter Valid Email"
                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="e.g., example@domain.com" required>

                <label>Your License Number:</label>
                <input type="text" name="lic" placeholder="Enter Your License Number" required>

                <label>Phone Number:</label>
                <input type="tel" name="ph" maxlength="10" onkeypress="return onlyNumberKey(event)"
                    placeholder="Enter Your Phone Number" required>

                <label>Password:</label>
                <input type="password" name="pass" id="psw" maxlength="12" placeholder="Enter Password"
                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                    title="Must contain at least one number, uppercase and lowercase letter, and 8+ characters"
                    required>

                <label>Confirm Password:</label>
                <input type="password" name="cpass" placeholder="Re-enter Password" required>

                <label>Gender:</label>
                <div class="gender-options">
                    <label for="male" class="gender-label">
                        <input type="radio" id="male" name="gender" value="male" required>
                        Male
                    </label>
                    <label for="female" class="gender-label">
                        <input type="radio" id="female" name="gender" value="female">
                        Female
                    </label>
                </div>

                <button type="submit" class="btnn" name="regs">Register</button>
                <p class="link">Already have an account?<br>
                    <a href="login.php">Log In</a> here</a>
                </p>
            </form>
        </div>
    </div>

    <script>
        // Allow only numeric input for phone number
        function onlyNumberKey(evt) {
            var ASCIICode = (evt.which) ? evt.which : evt.keyCode;
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) {
                return false;
            }
            return true;
        }

        // Password match validation before form submission
        document.getElementById("register").onsubmit = function (event) {
            const pass = document.querySelector("input[name='pass']").value;
            const cpass = document.querySelector("input[name='cpass']").value;
            if (pass !== cpass) {
                alert("Passwords do not match!");
                event.preventDefault();
            }
        };
    </script>

</body>

</html>