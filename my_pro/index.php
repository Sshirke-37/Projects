<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


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
    <link  rel="stylesheet" href="css/style.css">
    <script type="text/javascript">
        function preventBack() {
            window.history.forward(); 
        }
          
        setTimeout("preventBack()", 0);
          
        window.onunload = function () { null };
    </script>
</head>
<body>


    <div class="hai">
        <header>
            <nav>
                <div class="fonting">
               <div class="menu-icon">
                  <i class="fa fa-bars fa-2x"></i>
               </div>
               <div class="logo">
                  LOGO
               </div>
               <div class="menu">
                  <ul>
                     <li><a href="#">Home</a></li>
                     <li><a href="#">About</a></li>
                     <li><a href="#">Blog</a></li>
                     <li><a href="#">Contact</a></li>
                     <li><a href="adminlogin.php">Admin</a></li>
                     <li><a href="/pro/login/index.php">Login</a></li>
                  </ul>
               </div>
               </div>
            </nav>
         </header>
        <div class="content">
            <h1>Rent Your <br><span>Dream Car</span></h1>
            <p class="par">Live the life of Luxury.<br>
                Just rent a car of your wish from our vast collection.<br>Enjoy every moment with your family<br>
                 Join us to make this family vast.  </p>
            <button class="cn"><a href="register.php">JOIN US</a></button>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html> -->


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <title>CAR RENTAL</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style2.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header>
            <nav>
                <div class="navbar-content">
                    <div class="logo">
                        CaRental
                    </div>
                        <div class="menu">
                            <nav class="space-x-6">
                                <a href="#" class="text-gray-700 hover:text-blue-500">Home</a>
                                <a href="#" class="text-gray-700 hover:text-blue-500">About US</a>
                                <a href="#" class="text-gray-700 hover:text-blue-500">Blog</a>
                                <a href="#" class="text-gray-700 hover:text-blue-500">Contact</a>
                                <a href="adminlogin.php" class="text-gray-700 hover:text-blue-500">Admin</a>
                                <a href="/pro/login/index.php" class="text-gray-700 hover:text-blue-500">Login</a>
                            </nav>
                        </div>
                </div>
            </nav>
        </header>
        <div class="content">
            <h1>Rent Your <br><span>Dream Car</span></h1>
            <p class="par">Live the life of luxury with our curated car rentals.<br>Choose from a vast collection and make every journey memorable with comfort and style.</p>
            <button class="cn"><a href="register.php">JOIN US</a></button>
        </div>

        

    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html> -->




<!DOCTYPE html>
<html lang="en">

<head>
    <title>CAR RENTAL</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style2.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <header>
            <nav>
                <div class="navbar-content">
                    <div class="logo">
                        CaRental
                    </div>
                    <div class="menu">
                        <nav class="space-x-6">
                            <a href="index.php" class="text-gray-700 hover:text-blue-500">Home</a>
                            <a href="aboutus.html" class="text-gray-700 hover:text-blue-500">About US</a>
                            <a href="#" class="text-gray-700 hover:text-blue-500">Blog</a>
                            <a href="#" class="text-gray-700 hover:text-blue-500">Contact</a>
                            <a href="adminlogin.php" class="text-gray-700 hover:text-blue-500">Admin</a>
                            <a href="login.php" class="text-gray-700 hover:text-blue-500">Login</a>
                        </nav>
                    </div>
                </div>
            </nav>
        </header>
        <div class="content">
            <h1>Rent Your <br><span>Dream Car</span></h1>
            <p class="par">Live the life of luxury with our curated car rentals.<br>Choose from a vast collection and
                make every journey memorable with comfort and style.</p>
            <button class="cn"><a href="register.php">JOIN US</a></button>
        </div>

        <!-- Car Rental Search Form -->
        <div class="search-form">
            <h2>Find Your Car</h2>
            <form action="search_results.php" method="GET">
                <div class="input-group">
                    <label for="pickup-location">Pick-Up Location:</label>
                    <input type="text" id="pickup-location" name="pickup-location" placeholder="Enter pick-up location"
                        required>
                </div>
                <div class="input-group">
                    <label for="destination">Destination:</label>
                    <input type="text" id="destination" name="destination" placeholder="Enter destination" required>
                </div>
                <div class="input-group">
                    <label for="pickup-date">Pick-Up Date:</label>
                    <input type="date" id="pickup-date" name="pickup-date" required>
                </div>
                <div class="input-group">
                    <label for="return-date">Return Date:</label>
                    <input type="date" id="return-date" name="return-date" required>
                </div>
                <button type="submit" class="search-btn">Search Cars</button>
            </form>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>

</html>