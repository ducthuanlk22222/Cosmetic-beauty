<?php
    // date_default_timezone_set("Etc/GMT+8");
    include "server/sql_connection.php";

    function generate_id_order($order_type, $order_id) {
        include "server/sql_connection.php";

        $count = 0;
        // $id_number = random_int(100, 999);
        $query_sql = "SELECT * FROM orders";
        $result = mysqli_query($connection, $query_sql);
        // $sql_query = mysqli_fetch_assoc($result);

        if ($result == True) {
            foreach($result as $row) {
                $temp = substr($row['id_order'], 3, 6);
                if ($temp == date("dmy")) {
                    $count++;
                }
            }

            $count++;
            // $id_number2 = random_int(100, 999);
            // $order_id = "ID" . $order_type . date("dmy") . $id_number2;
            if ($count < 10) {
                $order_id = "ID" . $order_type . date("dmy") . "00" . $count;
            }
            else if ($count < 100) {
                $order_id = "ID" . $order_type . date("dmy") . "0" . $count;
            }
            else {
                $order_id = "ID" . $order_type . date("dmy") . $count;
            }
        }
        else {
            // $id_number2 = random_int(100, 999);
            // $order_id = "ID" . $order_type . date("dmy") . $id_number2;
            if ($count < 10) {
                $order_id = "ID" . $order_type . date("dmy") . "00" . "1";
            }
        }

        return $order_id;
    }

    if (isset($_POST['confirm'])) {
        $order_type = "";
        $order_id = "";

        $email = "";
        $name_customer = "";
        $phone_number = "";
        $address = "";
        $note = "";
        $note2 = "";

        if (isset($_POST['email'])) {
            $email = $_POST['email'];
        }

        if (isset($_POST['name_cs'])) {
            $name_customer = $_POST['name_cs'];
        }

        if (isset($_POST['phone_number'])) {
            $phone_number = $_POST['phone_number'];
        }

        if (isset($_POST['address'])) {
            $address = $_POST['address'];
        }

        if (isset($_POST['pay'])){
            $order_type = $_POST['pay'];
        }

        if (isset($_POST['note'])) {
            $note = $_POST['note'];
            $note2 = implode(" ", $note);
        }

        $order_id = generate_id_order($order_type, $order_id);

        // echo $subtotal;

        $query_add = "INSERT INTO `orders`(`id_order`, `name_customer`, `phone_number`, `address`, `email`, `note`, `order_type`, `order_price`)
                    VALUES ('$order_id', '$name_customer', '$phone_number', '$address', '$email', '$note2', '$order_type', '$subtotal')";

        $result2 = mysqli_query($connection, $query_add);
        if (!$result2) {
            echo "Error ". $connection->error;
        }

        foreach($products as $row) {
            $productID = $row['id_product'];
            $quantity_product = $products_in_cart[$row['id_product']];
            $product_price = $row['price'] * $products_in_cart[$row['id_product']];

            $query_add = "INSERT INTO `order_detail`(`id_order`, `id_product`, `quantity`, `price`)
                            VALUES ('$order_id', '$productID', '$quantity_product', '$product_price')";

            $result3 = mysqli_query($connection, $query_add);
            if (!$result3) {
                echo "Error ". $connection->error;
            }
        }

        unset($_SESSION['cart']);

        $products = array();
        $products_in_cart = array();

        header('location: index.php?page=confirm');
        exit;
    }
?>