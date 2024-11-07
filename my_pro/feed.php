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
                <h2>Admin<span> Panel</span></h2>
            </div>
            <nav class="nav-menu">
                <ul>
                    <li><a href="admindash.php"> Dashboard</a></li>
                    <li><a href="adminvehicle.php"> Vehicle Management</a></li>
                    <li><a href="adminusers.php"> Users</a></li>
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
                    <!-- <input type="text" placeholder="Search...">
                    <button type="submit"><i class="fas fa-search"></i></button> -->
                </div>
                <div class="user-profile">
                    <img src="images/admin-avatar.jpg" alt="Admin Profile Picture">
                    <span>Admin</span>
                </div>
            </header>

            <!-- Dashboard Overview Section -->
            <section class="overview">
                <!-- <h1>Dashboard Overview</h1>
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
                </div> -->
            </section>

            <!-- Feedback Data Table Section -->
            <section class="data-section">
                <h2>Feedback</h2>
                <br>
                <?php
                // Include database connection
                require_once('connection.php');

                // Query to fetch feedback data
                $query = "SELECT * FROM feedback";
                $queryy = mysqli_query($con, $query);
                $num = mysqli_num_rows($queryy);
                ?>

                <table>
                    <thead>
                        <tr>
                            <th>Feedback ID</th>
                            <th>Email</th>
                            <th>Comment</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Loop to output each feedback entry
                        while ($res = mysqli_fetch_array($queryy)) {
                            ?>
                            <tr class="active-row">
                                <td><?php echo $res['FED_ID']; ?></td>
                                <td><?php echo $res['EMAIL']; ?></td>
                                <td><?php echo $res['COMMENT']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </section>
        </main>
    </div>
</body>

</html>