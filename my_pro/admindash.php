<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">
                <h2>Admin<span>Panel</span></h2>
            </div>
            <nav class="nav-menu">
                <ul>
                    <li><a href="admindash.php"> Dashboard</a></li>
                    <li><a href="adminvehicle.php"> Vehicle Management</a></li>
                    <li><a href="adminusers.php"> Users</a></li>
                    <li><a href="feed.php"> Feedback</a></li>
                    <li><a href="adminbook.php"> Booking Requests</a></li>
                </ul>
            </nav>
            <div class="logout">
                <a href="index.php"> Logout</a>
            </div>
        </aside>

        <!-- Main Content Area -->
        <main class="main-content">
            <!-- Top Navbar -->
            <header class="top-nav">
                <div class="search-bar">
                </div>
                <div class="user-profile">
                    <img src="images/admin-avatar.jpg" alt="Admin Profile Picture">
                    <span>Admin</span>
                </div>
            </header>

            <!-- Dashboard Overview Section -->
            <section class="overview">
                <h1>Dashboard</h1>
                <br>
                <div class="cards">
                    <div class="card">
                        <h3>Total Users</h3>
                        <p>1,234</p>
                    </div>
                    <div class="card">
                        <h3>Vehicles</h3>
                        <p>56</p>
                    </div>
                    <div class="card">
                        <h3>Feedback</h3>
                        <p>78</p>
                    </div>
                    <div class="card">
                        <h3>Pending Bookings</h3>
                        <p>12</p>
                    </div>
                </div>
            </section>

            <!-- Feedback Data Table Section -->
            <!-- <section class="data-section">
                <h2>Dashboard</h2>
                <br>



            </section> -->
        </main>
    </div>
</body>

</html>