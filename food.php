<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Name</title>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: space-between;
}

nav li {
    margin-right: 20px;
}

nav a {
    color: #fff;
    text-decoration: none;
}

nav a:hover {
    color: #ccc;
}

#home {
    background-image: url('hero.jpg');
    background-size: cover;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
}

#home h1 {
    font-size: 48px;
}

#menu {
    padding: 20px;
}

.menu-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.menu-item {
    margin: 20px;
    width: 200px;
}

.menu-item img {
    width: 100%;
    height: 150px;
    object-fit: cover;
    border-radius: 10px;
}

.menu-item h2 {
    font-size: 18px;
    margin-top: 10px;
}

.menu-item p {
    font-size: 14px;
    color: #666;
}

#contact {
    padding: 20px;
}

#contact h1 {
    font-size: 24px;
}

#contact p {
    font-size: 14px;
    color: #666;
}

#dine-in {
    padding: 20px;
}

#dine-in h1 {
    font-size: 24px;
}

#dine-in form {
    margin-top: 20px;
}

#dine-in label {
    font-size: 14px;
    margin-bottom: 10px;
}

#dine-in input, #dine-in select {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
}

#take-away {
    padding: 20px;
}

#take-away h1 {
    font-size: 24px;
}

#take-away form {
    margin-top: 20px;
}

#take-away label {
    font-size: 14px;
    margin-bottom: 10px;
}

#take-away input, #take-away textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
}

footer {
    background-color: #333;
    color: #fff;
    padding: 10px;
    text-align: center;
    clear: both;
}
</style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#dine-in">Dine-In</a></li>
                <li><a href="#take-away">Take-Away</a></li>
            </ul>
        </nav>
    </header>
    <section id="home">
        <h1>Welcome to Restaurant Name</h1>
        <p>Experience the best cuisine in town</p>
        <button>Explore Menu</button>
    </section>
    <section id="menu">
        <h1>Our Menu</h1>
        <div class="menu-container">
            <div class="menu-item">
                <img src="burger.jpg" alt="Burger">
                <h2>Burger</h2>
                <p>Juicy beef burger with lettuce, tomato, and cheese</p>
                <p>Price: $10.99</p>
            </div>
            <div class="menu-item">
                <img src="pizza.jpg" alt="Pizza">
                <h2>Pizza</h2>
                <p>Classic cheese pizza with marinara sauce and melted mozzarella</p>
                <p>Price: $14.99</p>
            </div>
            <!-- Add more menu items here -->
        </div>
    </section>
    <section id="contact">
        <h1>Get in Touch</h1>
        <p>Address: 123, Main St, Anytown, USA</p>
        <p>Phone: 555-555-5555</p>
        <p>Email: [info@restaurantname.com](mailto:info@restaurantname.com)</p>
    </section>
    <section id="dine-in">
        <h1>Dine-In Reservation</h1>
        <form>
            <label for="name">Name:</label>
            <input type="text" id="name" required>
            <label for="date">Date:</label>
            <input type="date" id="date" required>
            <label for="time">Time:</label>
            <input type="time" id="time" required>
            <label for="party-size">Party Size:</label>
            <select id="party-size" required>
                <option value="">Select</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <!-- Add more options here -->
            </select>
            <button>Reserve</button>
        </form>
    </section>
    <section id="take-away">
        <h1>Take-Away Order</h1>
        <form>
            <label for="name">Name:</label>
            <input type="text" id="name" required>
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" required>
            <label for="order">Order:</label>
            <textarea id="order" required></textarea>
            <button>Order</button>
        </form>
    </section>
    <footer>
        <p>&copy; 2023 Restaurant Name</p>
    </footer>
    <script>// Add event listener to menu items
const menuItems = document.querySelectorAll('.menu-item');

menuItems.forEach((menuItem) => {
    menuItem.addEventListener('click', () => {
        // Add functionality here
    });
});

// Add event listener to dine-in form
const dineInForm = document.getElementById('dine-in-form');

dineInForm.addEventListener('submit', (e) => {
    e.preventDefault();
    // Add functionality here
});

// Add event listener to take-away form
const takeAwayForm = document.getElementById('take-away-form');

takeAwayForm.addEventListener('submit', (e) => {
    e.preventDefault();
    // Add functionality here
});</script>
</body>
</html>