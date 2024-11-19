<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .cart-icon {
            cursor: pointer;
            font-size: 24px;
        }
        .message {
            display: none;
            color: green;
            font-size: 18px;
        }
    </style>
    <script>
        function addToCart() {
            document.getElementById('message').style.display = 'block';
            setTimeout(function() {
                window.location.href = 'shop.php';
            }, 1000); // Redirect after 1 second
        }
    </script>
</head>
<body>
    <div class="cart-icon" onclick="addToCart()">🛒</div>
    <div id="message" class="message">Added to cart</div>
</body>
</html>