<?php
require_once('./config.php');

session_start();
if(isset($_GET['action']) && $_GET['action'] == 'add-cart'){
    $title = $_GET['title'];
    $price = $_GET['price'];

    $sql = "SELECT qty FROM cart WHERE title = ?";

    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $title);

    if($stmt->execute()){
        $stmt->store_result();
        if ($stmt->num_rows >  0) {
            $stmt->bind_result($qty);
            $stmt->fetch();
            $qty += 1;
            $sql = "UPDATE cart SET qty = ? WHERE title = ?";

            $stmt = $con->prepare($sql);
            $stmt->bind_param("is", $qty, $title);

            if($stmt->execute()){
                $_SESSION['flash-msg'] = 'add-book-success';
                header("Location: ./index.php");
                die();
            } else {
                echo "Error: " . $sql . "<br>" . $stmt->error;
                die();
            }
        } else {
            $qty = 1;
            $sql = "INSERT INTO cart (title, price, qty) VALUES (?, ?, ?)";

            $stmt = $con->prepare($sql);
            $stmt->bind_param("ssi", $title, $price, $qty);

            if($stmt->execute()){
                $_SESSION['flash-msg'] = 'add-book-success';
                header("Location: ./index.php");
                die();
            } else {
                echo "Error: " . $sql . "<br>" . $stmt->error;
                die();
            }
        }
    } else {
        echo "Error: " . $sql . "<br>" . $stmt->error;
        die();
    }

    $stmt->close();
}

if(isset($_GET['action']) && $_GET['action'] == 'remove-cart'){
    $id = $_GET['id'];

    $sql = "DELETE FROM cart WHERE id = ?";

    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $id);

    if($stmt->execute()){
        header("Location: ./cart.php");
        die();
    } else {
        echo "Error: " . $sql . "<br>" . $stmt->error;
        die();
    }

    $stmt->close();
}

if(isset($_POST['action']) && $_POST['action'] == 'checkout'){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $addr = $_POST['address'];
    $cnum = $_POST['cnum'];
    $email = $_POST['email'];

    $sql = "SELECT title, price, qty FROM cart";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $total = 0;
        $items = [];

        while ($row = $result->fetch_assoc()) {
            $total += $row['price'] * $row['qty'];
            $items[] = $row;
        }

        $sql = "INSERT INTO checkout (fname, lname, address, cnum, email, total) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("ssssss", $fname, $lname, $addr, $cnum, $email, $total);

        if($stmt->execute()){
            $sql = "DELETE FROM cart";
            if ($con->query($sql) === TRUE) {
                $_SESSION['flash-msg'] = 'checkout-success';
                header("Location: ./index.php");
                die();
            } else {
                echo "Error: " . $sql . "<br>" . $con->error;
                die();
            }
        } else {
            echo "Error: " . $sql . "<br>" . $stmt->error;
            die();
        }
    } else {
        echo "Your cart is empty.";
    }

    $stmt->close();
}
?>
