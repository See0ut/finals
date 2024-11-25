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
        function addToCart(imageUrl) {
            document.getElementById('message').style.display = 'block';
            setTimeout(function() {
                window.location.href = 'shop.php?img=' + encodeURIComponent(imageUrl);
            }, 1000); // Redirect after 1 second
        }
    </script>
    
    <script>
        let cart = []; // Store cart items
let total = 0;

function addToCart(itemName, itemPrice, itemImage) {
    // Check if the item is already in the cart
    let existingItem = cart.find(item => item.name === itemName);
    if (existingItem) {
        existingItem.quantity += 1; // Increment quantity
    } else {
        cart.push({ name: itemName, price: itemPrice, image: itemImage, quantity: 1 });
    }
    total += itemPrice;
    updateCart();
}

function updateCart() {
    const cartDiv = document.getElementById('cart');
    cartDiv.innerHTML = ''; // Clear the cart display
    cart.forEach(item => {
        const div = document.createElement('div');
        div.className = 'cart-item';
        div.innerHTML = `
            <img src="${item.image}" alt="${item.name}">
            <div class="cart-details">
                <strong>${item.name}</strong><br>
                ₱${item.price} x ${item.quantity} = ₱${item.price * item.quantity}
            </div>
        `;
        cartDiv.appendChild(div);
    });
    document.getElementById('total').textContent = total;
}
    </script>
</head>
<body>
    <div id="message" class="message">Added to cart</div>
</body>
</html>