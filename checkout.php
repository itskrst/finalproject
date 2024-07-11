<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="logo4.png" type="image/gif" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="checkout-content">
        <h2>Checkout</h2>
        <form action="./process.php" method="POST" id="checkout-form">
            <input type="text" name="action" value="checkout" style="display:none;" required>
            <input type="text" id="first-name" name="fname" placeholder="First Name" required>
            <input type="text" id="last-name" name="lname" placeholder="Last Name" required>
            <input type="text" id="address" name="address" placeholder="Address" required>
            <input type="text" id="contact-number" name="cnum" placeholder="Contact Number" required>
            <input type="email" id="email" name="email" placeholder="Email" required>
            <button type="submit">Submit</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
