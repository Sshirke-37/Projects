<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINISTRATOR</title>
    <link rel="stylesheet" href="css/advehicel.css">
</head>

<body>
    <?php
    require_once('connection.php');
    $query = "SELECT * FROM cars";
    $queryy = mysqli_query($con, $query);
    $num = mysqli_num_rows($queryy);
    ?>

    <div class="hai">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">CaRs</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="admindash.php"> Dashboard</a></li>
                    <li><a href="adminusers.php">Users</a></li>
                    <li><a href="feed.php">Feedback</a></li>
                    <li><a href="adminbook.php">Booking Request</a></li>
                    <li><a href="index.php">Logout</a></button></li>
                </ul>
            </div>
        </div>
    </div>

    <h1 class="header">CAR DETAILS</h1>
    <button class="add"><a href="addcar.php">+ ADD CARS</a></button>

    <div>
        <table class="content-table">
            <thead>
                <tr>
                    <th>CAR ID</th>
                    <th>CAR NAME</th>
                    <th>FUEL TYPE</th>
                    <th>CAPACITY</th>
                    <th>PRICE</th>
                    <th>AVAILABLE</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($res = mysqli_fetch_array($queryy)) {
                    ?>
                    <tr class="active-row">
                        <td><?php echo $res['CAR_ID']; ?></td>
                        <td><?php echo $res['CAR_NAME']; ?></td>
                        <td><?php echo $res['FUEL_TYPE']; ?></td>
                        <td><?php echo $res['CAPACITY']; ?></td>
                        <td><?php echo $res['PRICE']; ?></td>
                        <td><?php echo ($res['AVAILABLE'] == 'Y') ? 'YES' : 'NO'; ?></td>
                        <td><button class="but"><a href="deletecar.php?id=<?php echo $res['CAR_ID'] ?>">DELETE
                                    CAR</a></button></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>