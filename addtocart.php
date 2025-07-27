<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $item = $_POST["item"];
        $total = $_POST["value"];
        $img = $_POST["image"];
        $con = mysqli_connect("localhost", "root", "root", "test");

        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

        date_default_timezone_set('Asia/Kolkata');
        $time = date('Y-m-d H:i:s');
        $query = "INSERT INTO Cart (`username`, `total_price`, `item_name`, `item_image`) VALUES ('sahil', '$total', '$item', '$img')";

        $result = mysqli_query($con, $query);

        if ($result) {
            header("Location: cart.html");
            exit();
        } else {
            echo "Unable to add your item!";
        }

        mysqli_close($con);
    }
    ?>