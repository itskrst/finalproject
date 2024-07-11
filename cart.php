<?php
require_once('./config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="logo4.png" type="image/gif" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="checkout-content">
        <h2>Cart</h2>
        <table class="table table-striped table-bordered" id="dataTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $sql = "SELECT * FROM cart";
                $result = $con->query($sql);
                if($result->num_rows>0){
                    while($row = $result->fetch_assoc()){
                        echo"<tr>";
                        echo"<td>1</td>";
                        echo"<td>".$row['title']."</td>";
                        echo"<td>".$row['price']."</td>";
                        echo"<td>".$row['qty']."</td>";
                        echo"<td>".$row['qty'] * $row['price']."</td>";
                        echo"<td><a href='process.php?action=remove-cart&id=".$row['id']."'><button>Remove</button></a></td>";
                        echo"</tr>";
                    }
                }else{
                    echo"<tr>";
                    echo"<td colspan='4'>No items on cart yet.</td>";
                    echo"</tr>";
                }
            ?>
            </tbody>
        </table>
    </div>
    <?php
    if($result->num_rows>0){
    ?>
        <a href="./checkout.php"><button>Proceed to checkout</button></a>
    <?php  
    }
    ?>
    <script src="script.js"></script>
</body>
</html>
