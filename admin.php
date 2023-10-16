<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Home</title>
    <link rel="stylesheet" href="./admin.css">
</head>

<body>
    <?php include_once("./adminsession.php") ?>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mycollapsediv"
                aria-controls="mycollapsediv" aria-expanded="false" aria-label="toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mycollapsediv">
                <ul class="navbar-nav mr-auto mt-2 ml-5 col-lg-3 mr-auto flex-column vertical-nav bar">
                    <li>
                        <div class="row" style=" padding-left: 30px; ">
                            <img src="./images/bus.svg" alt="" style=" width: 35px; height: 25px; margin-top: 0px; ">
                            <h4>Bus Service</h4>
                        </div>
                    </li>
                    <li>
                        <img src="./images/userav-min.png" alt="" class=" img-fluid ">
                        <h4 class=" text-center"><?php echo $_SESSION['name']; ?></h4>
                        <h6 class=" text-center">system administration</h6>
                    </li>
                    <li class="nav-item active">
                        <a href="./admin.php" data-value="Dashboard" class="nav-link">Dashboard</a>
                    </li>
                    <li class=" nav-item active">
                        <a href="./buses.php" data-value="Buses" class="nav-link">Buses</a>
                    </li>
                    <a href="./route.php" data-value="contact" class="nav-link">Routes</a>
                    </li>
                    <li class=" nav-item active">
                        <a href="./costumer.php" class="nav-link">Costumer</a>
                    </li>
                    <li class=" nav-item active">
                        <a href="./booking.php" class="nav-link">Booking</a>
                    </li>
                    <li class=" nav-item active">
                        <a href="./seat.php" class="nav-link">Seats</a>
                    </li>
                    <li class=" nav-item active">
                        <a href="addadmin.php" class="nav-link">New Admin</a>
                    </li>
                    <li class=" nav-item active">
                        <a href="query.php" class="nav-link">Query</a>
                    </li>
                    <li>
                        <form action="" method="post">
                        <input type="submit" value="logout" name="logout" class=" btn btn-link col-lg-6 " style=" text-decoration: none; color: black; " >
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
        <?php include_once("./dashboard.php"); ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>