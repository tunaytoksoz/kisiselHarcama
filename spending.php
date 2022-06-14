<?php

include "layout/include/database.php";

if (isset($_POST)) {

    $desc = $_POST['description'];

    $price = $_POST['price'];

    $quantity = $_POST['quantity'];

    $date = $_POST['date'];

    $totalPrice = $_POST['totalPrice'];

    $sql = "INSERT INTO `spending`(`description`, `price`, `quantity`, `date`, `totalPrice`) VALUES ('$desc','$price','$quantity','$date', '$totalPrice')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

        header('Location: http://localhost/kisiselHarcama/');

    }else{

        echo "Error:". $sql . "<br>". $conn->error;
    }
    $conn->close();
}

?>
